<?php
  class AdminController extends CI_Controller
  {

    private $user;

    public function __construct()
    {
      parent::__construct();



      if (isset($_SESSION['email']) == false && isset($_SESSION['type']) == false) {
           redirect(base_url().'Auth/index');
      }

      $this->load->model('User');
      $this->user = $this->User->get_user($_SESSION['email']);
      $data['user_data'] = $this->user;
      if ($_SESSION['type'] == 'normal') {
        $this->load->view('normal', $data);
      }
    }

    public function index(){
      $data['user_data'] = $this->user;
      $this->session->set_flashdata('home', 'active');
      if (isset($this->session->msg)) {
          $data['message'] = $this->session->msg;
      }
      $this->load->view('admin', $data);
      if($_SESSION['type']==null){
            redirect(base_url().'Auth/index');
      }
    }

    public function box(){
      $this->load->view('box');
    }

    public function getAddProduct()
    {
      if (isset($_SESSION['addProductError'])) {
        $data['addProductError']=$_SESSION['addProductError'];
      }
     
      $data['user_data'] = $this->user;
      $this->load->view('addProducts', $data);
    }

    public function getUpdateProduct()
    {
      $data['user_data'] = $this->user;
      $this->load->view('updateProducts', $data);
    }

    public function getDeleteProduct()
    {
      $data['user_data'] = $this->user;
      $this->load->view('removeProducts', $data);
    }
    public function viewProducts()
    {
      $data['user_data'] = $this->user;
      $this->load->view('viewProducts', $data);
    }

   
    

    public function fetch_data(){
        if (isset($_GET['name'])) {
        $data['user_data'] = $this->user;
        $name=$_GET['name'];
        $this->load->model("Product");
        $data['product_data']=$this->Product->fetchData($name);
        $this->load->view('ViewParticularProducts',$data);
        }
    }

      public function updateProductsValue(){
        if (isset($_GET['name'])){
          $data['user_data']=$this->user;
          $name=$_GET['name'];
          $this->load->model("Product");
          $data = $this->Product->fetchData($name)->result();
          header('Content-Type: application/json');
          echo json_encode( $data );
          
        }

      }

    public function display_Product(){
         if (isset($_GET['id'])) {
          $data['user_data'] = $this->user;
          $id=$_GET['id'];
          $this->load->model("Product");
          $data["pdata"]=$this->Product->update_data($id);
          $this->load->view("updateViewProduct",$data);
          }
      }

    public function update_profile(){
        if (isset($_GET['id'])) {
        $data['user_data']=$this->user;
        $id=$_GET['id'];
        $this->load->model("User");
        $data['pdata']=$this->User->userUpdateForm($id); 
        $this->load->view("Profile_Update",$data);
        }
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
      redirect(base_url().'AdminController/index');
    }

    public function deleteProduct(){
      $id=$_GET['id'];
      $this->load->model('Product');
      $this->Product->RemoveProduct($id);
      $data['user_data'] = $this->user;
      $data['message'] = "message";
      $this->session->set_flashdata('msg', 'Product Delete Succesfull');
      redirect(base_url().'AdminController/index');
    }

    public function report(){
      $data['user_data'] = $this->user;
      $this->load->view("adminReprotSales",$data);
    }

    public function customerData(){
      $data['user_data'] = $this->user;
      $this->load->model('User');
      $data['pdata']=$this->User->customerDataDb();
      $this->load->view("adminCutsomerReport",$data);
    }

    public function salesData(){
      $data['user_data'] = $this->user;
      $this->load->model('User');
      $data['pdata']=$this->User->salesDataDb();
      $this->load->view("adminSalesReport",$data);
    }

    public function salesDatabyDate(){
      $data['user_data'] = $this->user;
      $date1=$this->input->get('date1');
      $date2=$this->input->get('date2');
      $this->load->model('User');
      $data['datedata']=$this->User->saleByDateDb($date1,$date2);
      $this->load->view("adminSalesReport",$data);
    }

    

    public  function logout(){
      unset($_SESSION);
      session_destroy();
      redirect(base_url().'Auth', 'refresh');
      }
    
    public function help(){
        $data['user_data'] = $this->user;
        $this->load->view('adminhelp',$data);
    }

  }

 ?>
