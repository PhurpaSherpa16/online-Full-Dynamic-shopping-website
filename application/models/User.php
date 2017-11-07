<?php

  class User extends CI_Model
  {

    public function create($fname,$lname,$email,$address,$phone,$password)
    {
      $data = array(
        'fname' =>$fname ,
        'lname' =>$lname ,
        'email' =>$email ,
        'address' =>$address ,
        'phone' =>$phone ,
        'password' =>$password,
        'type'=>'normal');

      $ans =  $this->db->insert('register',$data);
      if ($ans > 0) {
        return "User Successfully Created";
      }
      return "User faild to Created";
    }
    
    public function check_Product($user_id,$product_id,$product_type,$product_name,$product_rate,$quantity,$image){
          $data=array(
            'user_id'=>$user_id,
            'product_id'=>$product_id,
            'product_type'=>$product_type,
            'product_name'=>$product_name,
            'product_rate'=>$product_rate,
            'quantity'=>$quantity,
            'image'=>$image
          );
          $query=$this->db->insert('cart',$data);
          return $query;
    }

    public function get_cart($id){
      $query=$this->db->query("SELECT * FROM  cart where user_id = '$id' ");
      return $query;
    }

    public function get_user($email='')
    {
          $this->db->where('email', $email);
          $query=$this->db->get('register');
          $user = $query->row();
          return $user;
    }

    public function userUpdateForm($id){
      $query=$this->db->query("SELECT * FROM register where id = '$id'");
      return $query;
    }
    
    public function updateProfile($id,$firstname,$lastname, $email,$address, $phonenumber,$password){
      $query=$this->db->query("UPDATE register set fname='$firstname',lname='$lastname',email='$email', address='$address', phone='$phonenumber', password='$password' where id=$id");
      return $query;
    }

    public function RemoveProductFromCart($id){
      $query=$this->db->query("DELETE FROM cart where id=$id ");
      return $query;
    }
    public function RemoveCheck($user_id){
      $query=$this->db->query("DELETE FROM cart where user_id=$user_id");
      return $query;
    }
    public function customerDataDb(){
      $query=$this->db->query("SELECT * FROM register");
      return $query;
    }
    public function salesDataDb(){
      $query=$this->db->query("SELECT order_product.*, product.pname, register.fname,register.lname,register.email,register.phone,register.address FROM order_product, product, register WHERE register.id=order_product.user_id AND product.id=order_product.product_id");
      return $query;
    }

    public function email($email){
      $query=$this->db->query("SELECT * FROM register where email = '$email'");
      return $query;
    }

    public function saleByDateDb($date1,$date2){
      $query=$this->db->query("SELECT order_product.*, product.pname, register.fname,register.lname,register.email,register.phone,register.address FROM order_product, product, register WHERE register.id=order_product.user_id AND product.id=order_product.product_id AND order_date >= '$date1' AND order_date<='$date2'");
      return $query;
    }
  }
 ?>
