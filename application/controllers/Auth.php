<?php
  class Auth extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();

      if (isset($_SESSION['email']) && isset($_SESSION['type'])) {
        if ($_SESSION['type'] == 'admin') {
          redirect(base_url().'AdminController');
        }elseif ($_SESSION['type'] == 'normal') {
          redirect(base_url().'UserController');
        }
      }
    }

    public function index(){
        $this->load->model("Product");
        $data["pdata"]=$this->Product->interface_product();
        $this->load->view('interface',$data);
    }

    public function loginCheck(){
          $this->load->library('form_validation');
           $this->form_validation->set_rules('email', 'Email', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           if ($this->form_validation->run()) {
             $email=$this->input->post('email');
             $password=$this->input->post('password');

             $this->load->model('User');
             $user = $this->User->get_user($email);

             if ($user == null) {
              $this->session->set_flashdata('login', 'Email did not exits!!!');
               redirect(base_url().'Auth/', 'refresh');
             }else{
               if ($user->password == $password) {
                   $session_data=array('email'=>$user->email, 'type'=>$user->type);
                   $this->session->set_userdata($session_data);

                   if ($user->type == 'normal') {
                     redirect(base_url().'UserController');
                   }else if ($user->type == 'admin') {
                     redirect(base_url().'AdminController');
                   }
               }else {
                 $this->session->set_flashdata('login', 'Password did not Match!!!');
                 redirect(base_url().'Auth', 'refresh');
               }
             }
          }
          else {
              redirect(base_url().'Auth', 'refresh');
          }
    }
     public function aboutPage(){
        $this->load->view("About");
      }

        public function getRegister()
        {
        $this->load->view('register');
        }

      public function product_views(){
      $product_type=$_GET['product_type'];
      $this->load->model("Product");
      $data['pdata']=$this->Product->fetchData($product_type);
      $this->load->view("interface",$data) ;  
      }
    public function product_view(){
      $pid=$_GET['pid'];
      $this->load->model("Product");
      $data['pdata']=$this->Product->update_data($pid);
      $this->load->view("ViewInterfaceProduct",$data) ;  
      }

    function registerUser(){
      $fname=$this->input->post('firstname');
      $lname=$this->input->post('lastname');
      $email=$this->input->post('email');
      $address=$this->input->post('address');
      $phone=$this->input->post('phonenumber');
      $password=$this->input->post('password');
      $this->load->model('User');
      $msg=$this->User->create($fname,$lname,$email,$address,$phone,$password);
      $data['register'] = $msg;
      $this->load->view("register", $data);
    }

    public function emailCheck(){
      $email=$this->input->get('q');
      $this->load->model('User');
      $data['email']=$this->User->create($email);
      $this->load->view("register", $data);
    }
    public function help(){
        $this->load->view('normalhelp');
    }
}
 ?>
