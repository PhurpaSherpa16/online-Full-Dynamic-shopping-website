<?php 
class UserTest extends CI_Controller
{
  
    public function testUserRegitser()
    {
		        $this->load->model('User');
		        $result=$this->User->create('Phurpa','Sherpa','phurpa@gmail.com','ktm','985555','pw');
		        $expected_result="User Successfully Created";
		        $test_name="User regitser Test";
		        $ans=$this->unit->run($result,$expected_result,$test_name);
		        echo $ans;
    }

} 

?>