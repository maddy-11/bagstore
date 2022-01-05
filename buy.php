<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'php/links.php' ;

  $p_id = $_GET['product_id'];
  $fetchquery = mysqli_query($connection,"select * from items where product_id = $p_id");
  if($fetchquery){
  $fetch = mysqli_fetch_assoc($fetchquery);
  $rows = mysqli_num_rows($fetchquery);
  if ($rows) {
  $name = $fetch['product_name'];
  $img = $fetch['image'];
  $p_price =$fetch['price'];
  $rattings =$fetch['rattings'];
  }}



if (isset($_POST['purchase'])) {
	session_start();
	$_SESSION['cart'] ++;
	session_commit();
}
  ?>
  
  <title><?php echo $name ?></title>
</head>
<body >
  <?php include 'header.php'; ?>

<div class="container-fluid  my-5">
  <div class="row my-5 p-1">

    <div class="col-lg-5 border border-secondary">
      <img class="img" src="<?php echo $img ?>" class="image-fluid m-auto img">
    </div>

    <div class="col-lg-6 border border-secondary p-3 ">
      <h2 class="fs-1 font"><?php echo $name ?></h2>
      <div class="my-2 fs-3 text-danger">Price $<?php echo $p_price ?></div>
      <?php 
      $i=0;
      while($i<$rattings) {
        ?>
      <img src="images/star-icon.png" class="" style="width:3%">
        <?php
        $i++;
      }
      ?>
      <h3 class="mt-4 font">Choose Your Color</h3>
      <form method="POST" class="row px-2" >
        <div  class="col-lg-3 col-md-3 col-4 row align">
        RED
        <input type="radio" name="color" value="Red" class="col-lg-6 col-md-6 col-2" checked required>
        </div>
        <div  class="col-lg-3 col-md-3 col-4 row align">
        BLUE
        <input type="radio" name="color" value="Blue" class="col-lg-6 col-md-6 col-2" required></div>
        <div  class="col-lg-3 col-md-3 col-4 row align">
        BLACK
        <input type="radio" name="color" value="Black" class="col-lg-6 col-md-6 col-2" required></div>
        <div class="mt-2">
        <input type="number" name="no_of_items" min="1" class="col-lg-2 col-md-2 col-2 text-center border-dark mt-1" value="1">
        </div>
        <input type="submit" class="btn btn-warning border-dark mt-5 col-lg-4 btn-hover" value="Add To Cart" toggle = "tooltip" data-placement="top" title="Add to Cart" name="purchase">
      </form>
      
    
    </div>
    
  </div>
</div>

<?php include 'footer.php';


  
if (isset($_POST['purchase'])) {

  
  if(!isset($_SESSION['id']))
{
  ?>
  <script type="text/javascript">
    alert("Sorry You are not Logged In");
    location.replace("login.php");
  </script>
    <?php
  }

    $clr = $_POST['color'];
  $quantity = $_POST['no_of_items'];
  $t_amount = $p_price * $quantity;
  $user = $_SESSION['id'];

  $insertquery = mysqli_query($connection,"insert into orders (product_id,product_name,color,price,quantity,t_amount,image,user_id)values($p_id,'$name','$clr',$p_price,$quantity,$t_amount,'$img',$user)");

  if ($insertquery) {

    ?>
<script type="text/javascript">
  // alert("successful");
</script>
    <?php
// $_SESSION['cart']++;
  }
  else{
    ?>
<script type="text/javascript">
  alert("Unsuccessful");
</script>
    <?php

  }}
?>


</body>
</html>
<style type="text/css">
  .row img{
    width: 70%;
  }
  
  .img{
    padding: 10%;
          
        }
        .align{
          align-items: center;
        }
        input[type=number]{
          
        }
        .btn-hover:hover{
          background: white;
          color: black;
        }
</style>