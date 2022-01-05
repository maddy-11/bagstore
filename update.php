<!DOCTYPE html>
<html lang="en">
<head>


	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Pizza/css/main.css">
	<?php 
	include 'php/links.php';
	?>
  
</head>
<body>

<?php include 'header.php'; ?>

	
<!-- ---------------------------------------------------- -->
		<?php 
		

		$id=$_GET['id'];

		$jquery="select * from accounts where ID = {$id}";
		$data=mysqli_query($connection,$jquery);
		$fetch=mysqli_fetch_assoc($data);
	
 if(isset($_POST['update'])) {

	$id=$_GET['id'];
	$fname= $_POST['first_name'];
 	$lname= $_POST['last_name'];
 	$email=$_POST['email_address'];
 	$pass=$_POST['password'];
 	
 	$updatequery = ("UPDATE accounts set ID = $id,first_name='$fname', last_name='$lname',email_address='$email', pass='$pass' where ID = $id");
 	$x = mysqli_query($connection,$updatequery);	
$jquery="select * from accounts where ID = {$id}";
		$data=mysqli_query($connection,$jquery);
		$fetch=mysqli_fetch_assoc($data);
 	if (!$x) {
 		?>
 		<script type="text/javascript">
 			alert("Data not inserted");
 		</script>
 		<?php 

}
				
 	}
			
 
?>
<?php 
	$id=$_GET['id'];
		$query="select * from accounts where ID = {$id}";
		$d=mysqli_query($connection,$query);
		$count= mysqli_num_rows($d);
 		if($count) {
				$namefetch = mysqli_fetch_assoc($d);
				$_SESSION['_user']=$namefetch['first_name'];
			}
?>

<!-- ---------------------------------------------------- -->
	


<!-- ===============================================================================================-->
<body>

<div class="form mt-5 col-lg-7 col-md-7 col-10 m-auto my-5">
					<div class="bg-grad p-3 border border-dark border-3">
				<form class="Sign-In-form validate-form" method="POST" action="">
					<h1 id="title" class="col-lg-7 col-md-7 col-10 mb-2">
						Profile
					</h1>
						<div>
						<input class = "mt-3 col-lg-7 col-md-7 col-10" id="input2" type="text" name="first_name" style="height: 40px;" value="<?php echo $fetch['first_name']?>" required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10" id="input2" type="text" name="last_name" style="height: 40px;" value="<?php echo $fetch['last_name']?>" required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10" id="input2" type="email" name="email_address" style="height: 40px;"  value="<?php echo $fetch['email_address']?>" required>
						<input class = "mt-3 col-lg-7 col-md-7 col-10" id="input2" type="password" name="password" style="height: 40px;" value="<?php echo $fetch['pass']?>" required>
						</div>

						<input class="btn btn-outline-dark mt-3 col-lg-6 col-md-6 col-8" id="form_btn" type="submit" name="update" value="Update" toggle="tooltip" data-placement="top" title="Update"><br>
						
							
						
				</form>
				</div>
			</div>
<!--===============================================================================================-->
<?php include 'footer.php'; ?>
</body>
</html>

<style type="text/css">
	#form_btn {
  font-weight: bold;
  font-size: 18px;
  font-family: sans-serif;
  border-width: 2px;
  font-weight: bold;
  align-items:center;
}

  .form{
  	justify-items: center;
  	justify-content: center;
  	text-align: center;
  	border-radius: 10px;
  	/*background: grey;*/
	/*box-shadow: 0px 10px 20px 0px rgba(200, 38, 10, 1.0);*/
  }
  body{
	  background-color: antiquewhite;
  }

h1{
	color: antiquewhite;
	text-align: center;
	/*border: solid;*/
	border-radius: 10px;
	margin: auto;	
	font-family: all;
	font-weight: bold;
	background: black;
}
input#input2{
	text-align: left;
	font: georgia 18px;
	border-radius: 10px;
	border-width: 0px;
	background: whitesmoke;
	color: black;
}
.bg-grad {  	
  background-image: linear-gradient(red, yellow);
}
</style>