<?php
$email=$_POST['email'];
$to = "$email";
$subject = "Product Order";
$txt = "Yoru product has been ordered. we will call you soon.";
$headers = "From:onlineMedecinal900@gmail.com" . "\r\n" .
"CC: $email";
mail($to,$subject,$txt,$headers);
		$data['user_data'] = $this->user;
          $data['pdata'] = $this->products;
          $data['message'] = "message";
          $this->session->set_flashdata('msg', 'Successfully order Product');
          redirect(base_url().'UserController/index');
?>
