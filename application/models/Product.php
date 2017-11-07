<?php
  class Product extends CI_Model
  {
        
    public function create($pname,$ptype,$rate,$desc,$image)
    {
      $data=array(
        'pname'=>    $pname,
        'ptype'=>    $ptype,
        'rate'=>     $rate,
        'details'=>  $desc,
        'image'=>    $image);

        $this->db->insert('product',$data);
        return "Products adding Successfully";
    }


     public function order_product($user_id,$product_id,$product_rate,$quantity,$email,$address,$mobileNumber)
    {
      $query=$this->db->query("INSERT INTO 
      order_product(user_id,product_id,email,delivery_address,mobile_number,order_date,qty,rate)
      values('$user_id','$product_id','$email','$address','$mobileNumber',CURRENT_DATE,'$quantity','$product_rate') ");
        return "Order Successfull!!";
    }


    public function getProduct(){
        $q=$this->db->get('product',4,4);
        $data=$q->result_array();
        return $data;
    }

    public function fetchData($name){
      $query=$this->db->query("SELECT * FROM product WHERE ptype='$name' ");
      return $query;
    }

    public function fetchCartData($id){
      $query=$this->db->query("SELECT * FROM cart c, register r WHERE c.user_id=r.id and c.user_id=".$id);
      return $query;

    }

    public function removeCartData(){
      $query=$this->db->query("DELETE FROM cart");
      return true;
      }

     public function update_data($id){
        $query=$this->db->query("SELECT * FROM product where id = '$id'");
        return $query;
      }

      public function interface_product(){
        $query=$this->db->query("SELECT * FROM (SELECT * FROM product order by id DESC LIMIT 12) product ORDER BY RAND()");
        return $query;
      }

      public function update_product($id,$pname,$ptype,$rate,$desc){
        $data=array(
          'pname'=>$pname,
          'ptype'=>$ptype,
          'rate'=>$rate,
          'details'=>$desc
        );
       $query=$this->db->query("UPDATE product set pname='$pname', ptype='$ptype', rate='$rate', details='$desc' where id='$id'");
        return $query;
      }

      public function get_latest_product(){
        $query=$this->db->query("SELECT * FROM product order by id DESC LIMIT 8");
        return $query;
      }

      public function removeProduct($id){
        $query=$this->db->query("delete from product where id=$id ");
        return $query;
      }

      public function searchProduct($name){
        $query=$this->db->query("SELECT * FROM product where pname LIKE '%$name%' OR details LIKE '%$name%' OR ptype LIKE '%$name%' OR rate LIKE '%$name%' ");
        return $query;
      }
  }
   ?>

