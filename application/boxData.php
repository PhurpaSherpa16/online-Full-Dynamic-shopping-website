<?php
  if (isset($products)) {
    foreach ($products as $p) {
        echo $p['pname'].' '.$p['details'].'<br>';
        ?>
        <div class="produtBox">

        </div>
        <img src="<?php echo base_url().'assets/images/products/'.$p['image'];?>" alt="image" height="200px" width="200px">
   <?php
    }
  }
  ?>
