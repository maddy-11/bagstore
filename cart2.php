<?php
$category = $_GET['category'];
$cat = strtoupper($category);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title><?php echo $cat ?></title>
	  <?php 
      include 'php/links.php';
      include 'header.php';
      ?>
      <style type="text/css">
        .middle{
          justify-content: space-around;
        }
        .img{
          width: 70%;
          height: 70%
        }
        .space-between{
          justify-content: space-between;
          flex-wrap: wrap;
        }
        .col-custom{
          height: 450px;
          width: 350px;
          margin: 10px
        }
        .col-custom-women{
          height: 300px;
          width: 300px;
          margin: 10px
        }
        a{
          text-decoration: none;
          color: darkcyan;
        }

@media only screen and (max-width: 830px){
          .col-custom{
          height: 250px;
          width: 200px;
        }

        }
@media only screen and (max-width: 1199px){
          .col-custom{
          height: 400px;
          width: 300px;
        }

        }
@media only screen and (max-width: 500px){
    .col-custom{
          height: 90%;
          width: 90%;
        }
  }

      </style>

<?php
$category = $_GET['category'];
?>

   </head>
   <!-- body -->
   <body class="body">

	<div class="container-fluid p-4">

		<h1 class="fs-1 text-center container p-4">New Arrivals</h1>
		<p class="fs-3 text-center col-lg-8 container">We have recently launched the new season stuff. You can find the perfect stuff for your below</p>
	</div>
  <div class="container-fluid bg-dark border-bottom py-5 col-lg-12 col-12 col-md-12">
    
    <?php if($category == "laptop bags"){?>
    <div class="container ">
    <div class="row middle ">

      <a href="buy.php?product_id=1" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 1</h2>
        <img class="img p-1" src="images/laptop1.jpg" style="height:90%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$30</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=2" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 2</h2>
        <img class="img p-1" src="images/laptop2.jpg" style="height:65%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$25</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=3" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 3</h2>
        <img class="img p-1" src="images/laptop3.jpg" style="height:80%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
           
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$20</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=4" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 4</h2>
        <img class="img p-1" src="images/laptop4.jpg" style="height:80%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$30</p>
            
          </div>
        </div>
      </div></a>
  
  
      <a href="buy.php?product_id=5" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 5</h2>
        <img class="img p-1" src="images/laptop5.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$23</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=6" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Laptop Bag 6</h2>
        <img class="img p-1" src="images/laptop6.jpg" style="height:80%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$40</p>
          </div>
        </div>
      </div></a>

    </div>
  </div>
<?php } ?>


<?php if($category == "women purses"){?>
    <div class="container ">
    <div class="row middle ">

      <a href="buy.php?product_id=7" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 1</h2>
        <img class="img p-1" src="images/women_bag1.jpg" style="height: 60%;">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$30</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=8" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 2</h2>
        <img class="img py-4" src="images/women_bag2.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$15</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=9" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 3</h2>
        <img class="img p-1" src="images/women_bag3.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
           
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$30</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=10" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 4</h2>
        <img class="img py-4" src="images/women_bag4.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$40</p>
            
          </div>
        </div>
      </div></a>
  
  
<a href="buy.php?product_id=11" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 5</h2>
        <img class="img py-4" src="images/women_bag5.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$35</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=12" class="card col-custom-women col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Women Purse 6</h2>
        <img class="img py-3" src="images/women_bag6.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$40</p>
          </div>
        </div>
      </div></a>

    </div>
  </div>
<?php } ?>

<?php if($category == "hiking bags"){?>

      <div class="container ">
    <div class="row middle ">

      <a href="buy.php?product_id=13" class="card col-custom col-md-11 col-11">
      <div >
        <h2 class="text-center mt-1">Hiking Bag 1</h2>
        <img class="img p-1" src="images/hiking_bag1.jpg" style="height:65%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$18</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=14" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Hiking Bag 2</h2>
        <img class="img p-1" src="images/hiking_bag2.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$28</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=15" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Hiking Bag 3</h2>
        <img class="img p-1" src="images/hiking_bag3.jpg">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
           
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$24</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=16" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Hiking Bag 4</h2>
        <img class="img p-1" src="images/hiking_bag4.jpg" style="height:75%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$20</p>
            
          </div>
        </div>
      </div></a>
  
  
      <a href="buy.php?product_id=17" class="card col-custom col-md-11 col-11">
      <div >
        <h2 class="text-center mt-1">Hiking Bag 5</h2>
        <img class="img p-1" src="images/hiking_bag5.jpg" style="height:85%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$30</p>
            
          </div>
        </div>
      </div></a>

      <a href="buy.php?product_id=18" class="card col-custom col-md-11 col-11">
      <div>
        <h2 class="text-center mt-1">Hiking Bag 6</h2>
        <img class="img p-1" src="images/hiking_bag6.jpg" style="height:75%">

        <div class="row space-between" style="align-items: center;">
          <div class="col-lg-8 col-md-8 col-8">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
            <img src="images/star-icon.png">
          </div>
          <div class="col-lg-4 col-md-4 col-4">
            <p class="fs-5">$25</p>
          </div>
        </div>
      </div>
    </a>
    </div>
  </div>
<?php } ?>


</div>
  	<!-- --------------------------------- -->
    <?php include 'footer.php' ?>
   </body>
</html>
