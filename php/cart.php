<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  
</head>
<body>

<!-- ------------------------------------- -->
<div class="container-fluid p-3">
  <h1 class="font">Shopping Cart</h1>
  <hr>
<div class="row" style="justify-content: space-around;">
  <div class="col-lg-8 border p-2  m-1">
    <table width="100%" >
      <thead>
        <th>Image</th>
        <th>Product</th>
        <th>Color</th>
        <th>Quantity</th>
        <th>Price</th>

      </thead>
      <tbody>
        <?php 


$username = "root";
$pass = "";
$server = 'localhost';
$database = 'web_project';
$connection = mysqli_connect($server,$username,$pass,$database);

                $id = $_GET['id'];
                $discount = 0;
                $final_price = 0;
                $tota_sum = 0;

      
          $query = "select * from orders where user_id = {$id}";
            $insert = mysqli_query($connection,$query);
          if($insert){
            
      $result = mysqli_query($connection, "SELECT SUM(t_amount) as Sum FROM orders where user_id = {$id}");
      $row = mysqli_fetch_assoc($result); 
      $total_sum=$row['Sum'];
          
          while($rows = mysqli_fetch_array($insert))
          {
        ?>
        <tr class="border-top">
        <td><img src="<?php echo $rows['image']?>" class="img-thumbnail p-2"></td>
        <td><?php echo $rows['product_name'] ?></td>
        <td><?php echo $rows['color'] ?></td>
        <td class="text-center"><?php echo $rows['quantity'] ?></td>
        <td>$<?php echo $rows['price'] ?></td>
        
      </tr>
    <?php }} ?>
    
      </tbody>
    </table>
  </div>
  <div  class="col-lg-3 p-2 border">
    <div class=" p-2">
    <h2 class="text-center my-3">Have a Coupon?</h2>
    <form method="POST" class="mb-3 m-auto row" aaction="php/coupon.php" style="justify-content:space-around;">
      <input type="text" name="coupon_" placeholder="Your Coupon" id="coupon" class="col-lg-8  p-1">
    <input class="col-lg-3  btn btn-outline-primary" id="member" type="submit" name="coupon"data-toggle="tooltip" data-placement="top" title="Get 25% Off!" value="Apply" >
    </form>   
  </div>
  <div class=" p-2 mt-2">
    <div class="row" style="justify-content:center;">
  <p class="col-lg-5 ">Total Price</p>
  <p class="col-lg-5  text-end">$<?php echo  $total_sum ?></p>
  <p class="col-lg-5 ">Discount</p>
  <!-- --------------------------------- -->
  <?php
  if (isset($_POST['coupon'])) {

  $coupon = $_POST['coupon_'];
  ?>
  <?php
  $query = "select * from coupon where coupon = '$coupon'";
  $couponquery = mysqli_query($connection, $query);
  if($couponquery){
    $row = mysqli_num_rows($couponquery);
    if ($row) {
      $discount = $total_sum/4;
      $final_price = $total_sum - $discount;
      ?>
  <?php
    }

    else{
      $discount = 0;
            ?>
  <script type="text/javascript">
    alert("Sorry! Your Coupon is incorrect");
  </script>
  <?php
    }
  }

}
?>
  <!-- ---------------------------------------- -->
  <p class="col-lg-5 text-end">$<?php echo $discount ?></p>
  <p class="col-lg-5 ">Final Price</p>
  <p class="col-lg-5 text-end">$<?php echo $total_sum-$discount ?></p>
</div>
  </div>

  <script src="js/javascript/js">
    
    function checkout() {
      location.replace("checkout.php");
    }
  </script>

  <button class=" btn btn-danger mt-3 container" onclick="checkout()">Check Out</button>
  </div>
</div>
</div>


<!-- ------------------------------------- -->

    
?>
</body>
</html>
<style>
  td{
    width: 19%;
    padding-left: 1%;
  }
  .img-thumbnail{
    border: none;
    border-right: solid 1px silver;
  }
  th{
    padding: 1%;
  }
  
</style>
