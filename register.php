<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include 'php/links.php' ?>


<!-- ===============================================================================================-->
</head>
<body class="bg-theme">	
<?php include 'header.php'; ?>

	<!-- ------------------------------------- -->
				<div class="formm mt-5 col-lg-7 col-md-7 col-10 m-auto my-5">
					<div class="bg-grad p-3">
				<form class="Sign-In-form validate-form " method="POST" action="">
					<h1 id="title" class="col-lg-7 col-md-7 col-10 my-2">
						Register
					</h1>
						<div>
						<input class = "mt-3 col-lg-7 col-md-7 col-10 p-1" id="input2" type="text" name="first_name" style="height: 40px;" placeholder="Enter First Name"required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10 p-1" id="input2" type="text" name="last_name" style="height: 40px;" placeholder="Enter Last Name"required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10 p-1" id="input2" type="email" name="email_address" style="height: 40px;" placeholder="Enter Email"required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10 p-1" id="input2" type="password" name="password" style="height: 40px;" placeholder="Enter Password"required>
						</div>

						<input class="btn btn-outline-dark mt-3 col-lg-6 col-md-6 col-8" id="form_btn" type="submit" name="register" value="Register" toggle="tooltip" data-placement="top" title="Register"><br>
						Already a Member? <a href="login.php"><b>Login Here</b></a>
							
						
				</form>
				
			</div></div>
			<?php include 'footer.php' ?>
			</body>
			</html>
<!--===============================================================================================-->



<?php 
	
 if(isset($_POST['register'])) {

 
 
 	$fname= $_POST['first_name'];
 	$lname=$_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
$inquery = "insert into accounts(first_name,last_name,email_address,pass)values('$fname','$lname','$email','$pass')";

 	$x = mysqli_query($connection,$inquery);
 	if($x)
	 {
		 ?>
		 <script>
			 alert("Account Created Successfully");
			 location.replace("index.php");
		 </script>
		 <?php
	 }
	 else{
		?>
		<script>
			alert("Failed")
		</script>
		<?php
	 }
 }
 
?>


<style type="text/css">
	#form_btn {
  font-weight: bold;
  font-size: 18px;
  font-family: sans-serif;
  border-width: 2px;
  font-weight: bold;
  align-items:center
}

  .formm{
  	
  	justify-items: center;
  	justify-content: center;
  	text-align: center;
  	border-radius: 10px;
  	background-image: linear-gradient(orangered, yellow);
	box-shadow: 0px 10px 20px 0px rgba(200, 38, 10, 1.0);
  }
  body{
	  background-color: antiquewhite;
  }

h1{

	color: antiquewhite;
	text-align: center;
	border-radius: 10px;
	border-bottom:solid 2px whitesmoke ;
	margin: auto;
	font-family: all;
	font: georgia;
	font-weight: bold;
	background: rgba(0, 0, 100, .3);
}
input#input2{
	text-align: left;
	font: georgia 18px;
	border-radius: 10px;
	border-width: 0px;
	background: rgba(0, 0, 0, 0.3);
	border-bottom-style: solid;
	border-bottom-width: 2px;
	border-bottom-color: whitesmoke;
	color: white;


}
input#input2::placeholder {
  color: antiquewhite;
  opacity: 1; 
}

</style>