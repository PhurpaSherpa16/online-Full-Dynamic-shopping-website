<?php
  class UserController extends CI_Controller
  {

    private $user;
    private $products;


    public function __construct()
    {
      parent::__construct();
      
      if (isset($_SESSION['email']) == false && isset($_SESSION['type']) == false) {
          redirect(base_url().'Auth/index');
      }
      else{
        $this->load->model('User');
        $this->user = $this->User->get_user($_SESSION['email']);
        $data['user_data'] = $this->user;
        if ($_SESSION['type'] == 'admin') {
          $this->load->view('admin', $data);
        }
        $this->load->model("Product");
        $this->products = $this->Product->get_latest_product();

      }
    }

    public function index(){
       if ($_SESSION['type'] == 'normal') {
      $data['user_data'] = $this->user;
      //$this->load->model("Product");
      //$data["pdata"]=$this->Product->get_latest_product();
      $data['pdata'] = $this->products;
      $this->session->set_flashdata('home', 'active');

      if (isset($this->session->msg)) {
          $data['message'] = $this->session->msg;
      }
      $this->load->view('normal', $data);
      }
      elseif ($_SESSION['type']==null) {
            redirect(base_url().'Auth/index');
      }
    }


    public function NormalprofileUpdate(){
        if (isset($_GET['id'])) {
        $data['user_data']=$this->user;
        $id=$_GET['id'];
        $this->load->model("User");
        $data['pdata']=$this->User->userUpdateForm($id); 
        $this->load->view("update_Normalprofile",$data);
        }
    }

     public function product_views(){
      $data['user_data'] = $this->user;
      $product_type=$_GET['product_type'];
      $this->load->model("Product");
      $data['pdata']=$this->Product->fetchData($product_type);
      $this->load->view("Normal_productViews",$data) ;  
      }

      public function product_view(){
      $data['user_data'] = $this->user;
      $pid=$_GET['pid'];
      $this->load->model("Product");
      $data['pdata']=$this->Product->update_data($pid);
      $this->load->view("Normal_productView",$data) ;  
      }

      public function getCart(){
        if (isset($_GET['id'])){
          $data['user_data']=$this->user;
          $id=$_GET['id'];
          $this->load->model("User");
          $data['cartdata']=$this->User->get_cart($id);
          $this->load->view('NormalCart',$data);    
        }
      }

      public function remove_ProductFromCart(){
        if (isset($_GET['id'])){
          $id=$_GET['id'];
          $data['user_data']=$this->user;
          $this->load->model("User");
          $this->User->RemoveProductFromCart($id);
          $id=$_GET['user_id'];
          $this->load->model("User");
          $data['cartdata']=$this->User->get_cart($id);
          $this->load->view('NormalCart',$data);   
        }
      }


      public function check_outProduct(){
          if (isset($_GET['uid'])){
          $id=$_GET['uid'];
          $data['user_data']=$this->user;
          $this->load->model("Product");
          $data['pdata']=$this->Product->fetchCartData($id)->result();
          $this->load->view("checkOutPage",$data);
      }
    }

    public function orderProduct()
    {
          $user_id=$this->input->post('user_id');
          $email=$this->input->post('email');
          $address=$this->input->post('address');
          $number=$this->input->post('number');
          $this->load->model("User");
          $cart_data=$this->User->get_cart($user_id)->result();
          foreach ($cart_data as $p) {
            $this->load->model('product');
            $msg=$this->product->order_product($user_id,$p->product_id,$p->product_rate,$p->quantity,$email,$address,$number);

          }
          $data=$this->User->RemoveCheck($user_id);
          $this->load->view("email",$email);
    }

      public function cart(){
         $data['user_data'] = $this->user;
         $this->load->view("NormalCart",$data);
      }

      public function addtoCart(){
          $user_id=$this->input->post('user_id');
          $product_id=$this->input->post('product_id');
          $product_type=$this->input->post('product_type');
          $product_name=$this->input->post('product_name');
          $product_rate=$this->input->post('product_rate');
          $quantity=$this->input->post('quantity');
          $image=$this->input->post('image');

          $this->load->model("User");
          $this->User->check_Product($user_id,$product_id,$product_type,$product_name,$product_rate,$quantity, $image);
          $data['user_data'] = $this->user;
          $data['pdata'] = $this->products;
          $data['message'] = "message";
          $this->session->set_flashdata('msg', 'Successfully Added to cart');
          redirect(base_url().'UserController/index');
      }

       public function profileUpdate(){
      $id=$this->input->post('id');
      $firstname=$this->input->post('firstname');
      $lastname=$this->input->post('lastname');
      $email=$this->input->post('email');
      $address=$this->input->post('address');
      $phonenumber=$this->input->post('phonenumber');
      $password=$this->input->post('password');
      $this->load->model('User');
      $this->User->updateProfile($id,$firstname,$lastname, $email,$address, $phonenumber,$password);
      $data['user_data'] = $this->user;
      $data['message'] = "message";
      $this->session->set_flashdata('msg', 'Update Profile Succesfull');
      redirect(base_url().'UserController/index');
    }

    public function searchProduct(){
            $search=$this->input->get('search');
            $this->load->model('Product');
            $data['pdata']=$this->Product->searchProduct($search);
            $data['user_data'] = $this->user;
            $this->load->view('normal',$data);
       }

    public function logout(){
      unset($_SESSION);
      session_destroy();
      redirect(base_url().'Auth', 'refresh');
    }

    public function help(){
       $data['user_data'] = $this->user;
        $this->load->view('normalhelp',$data);
    }






}
 ?>
