<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
</head>
<body>
	<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


	<div class=" py-3 bg-themee " style="height: 100%;">
		<h1 class="text-center text-dark mt-5">Welcome Admin</h1>
		<p class="text-center text-dark mb-5">From this panel you have the authority to add or remove an item or a user from the accounts list</p>
<div class="container col-lg-8 my-5">
		<div class="row col-lg-11 m-auto" style="flex-direction: column;">
		<a href="addproduct.php" class="btn btn-primary my-1">Add Product</a>
		<a href="delete_product.php" class="btn btn-primary my-1">Delete Product</a>
		<a href="#" class="btn btn-primary my-1">Delete User</a>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
</body>
</html>