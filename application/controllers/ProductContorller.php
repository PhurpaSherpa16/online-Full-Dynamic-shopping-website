<?php
  class ProductContorller extends CI_Controller
  {

        private $user;

        public function __construct()
        {
          parent::__construct();

          if (!isset($_SESSION['email'])) {
              redirect(base_url().'Auth', 'refresh');
          }
          $this->load->model('User');
          $this->user = $this->User->get_user($_SESSION['email']);
          $data['user_data'] = $this->user;

          if ($_SESSION['type'] == 'normal') {
            $this->load->view('normal', $data);
          }
        }

    public function index(){
        redirect(base_url().'Auth', 'refresh');
    }

    public function registerProduct(){
      $data['user_data'] = $this->user;
      $pname=$this->input->post('pname');
      $ptype=$this->input->post('ptype');
      $rate=$this->input->post('rate');
      $desc=$this->input->post('desc');
      $image=md5($pname);
      $config['file_name']          =$image;
      $config['upload_path']          = 'assets/images/products/';
      $config['allowed_types']        = 'gif|jpg|png';
      $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('image'))
      {
          $this->load->view('addProducts', $data);
      }
      $data['upload_img'] = $this->upload->display_errors();
      $image .='.'.pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION);
      $this->load->model('product');
      $msg=$this->product->create($pname,$ptype,$rate,$desc,$image);
      $data['user_data'] = $this->user;
      $data['message'] = "message";
      $this->session->set_flashdata('msg', 'Product Add Succesfull');
      redirect(base_url().'AdminController/index');
    }
  

     public function order_product(){
          $data['user_data'] = $this->user;
          $user_id=$this->input->post('user_id');
          $product_id=$this->input->post('product_id');
          $email=$this->input->post('email');
          $address=$this->input->post('address');
          $mobileNumber=$this->input->post('mobileNumber');
          $this->load->model("User");
          $data['cart']=$this->User->check_Product($user_id,$product_id,$product_type,$product_name,$product_rate,$quantity, $image);
            redirect(base_url().'UserController/index');
      }


   
    public function update_Product(){
          $id=$this->input->post('id');
          $pname=$this->input->post('pname');
          $ptype=$this->input->post('ptype');
          $rate=$this->input->post('rate');
          $desc=$this->input->post('desc');
          $this->load->model('Product');
          $this->Product->update_product($id,$pname,$ptype,$rate,$desc);
          $data['message'] = "message";
          $this->session->set_flashdata('msg', 'Successfully Update');
          redirect(base_url().'AdminController/index');
       }

       


    }

 ?>
