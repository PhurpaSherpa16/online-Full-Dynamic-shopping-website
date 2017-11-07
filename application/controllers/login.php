<?php
  class Login extends CI_Controller
  {
    public function index(){
        $this->load->model("Product");
        $data["pdata"]=$this->Product->interface_product();
        $this->load->view('interface',$data);
    }

    public function admin(){
      $this->load->view('admin');
    }

    public function loginCheck(){
          $this->load->library('form_validation');
           $this->form_validation->set_rules('email', 'Email', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
           if ($this->form_validation->run()) {
             $email=$this->input->post('email');
             $password=$this->input->post('password');
             $this->load->model('User');
                if ($this->User->get_user($email,$password)) {
                      $session_data=array('email'=>$email);
                      $this->session->set_userdata($session_data);
                      redirect(base_url().'RedirectController/userHome');
                    //  redirect(base_url().'login/enter');
                }
                else {
                    redirect(base_url().'login/index');
                }
          }
          else {
              $this->index();
          }
    }


  public  function enter(){
        if ($this->session->userdata('email')!='') {
              echo "<h2>Welcome - ".$this->session->userdata('fname').'</h2>';
              echo '<label><a href="'.base_url().'login/index">Logout</a></label>';
            }
            else{
              redirect(base_url().'login/index');
            }
        }

    function logout(){
      session_destroy();
      header('location:'.base_url().'login/index');
      }
}
 ?>
