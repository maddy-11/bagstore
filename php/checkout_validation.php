<?php 
include 'C:\xampp\htdocs\bag_store\connection.php';
echo '<script> location.replace("/bag_store/checkout.php"); </script>';
echo '<script> alert("hello"); </script>';

if (isset($_POST['submit'])) {

$address = $_POST['add'];
$city = $_POST['city'];
$province = $_POST['province'];
$phone = $_POST['phone'];

$name = $_POST['card_name'];
$card = $_POST['card_number'];
$exp_month= $_POST['exp_month'];
$exp_year= $_POST['exp_year'];
$cvv= $_POST['cvv'];



$insertQuery = mysqli_query($connection, "insert into delivery_add (address,city,province,phone)values('$address','$city','$province','$phone')");

if ($insertQuery) {
	?>
	<script>
		alert("hello");
		location.replace("C:\xampp\htdocs\bag_store\checkout.php");
	</script>
	<?php
}

}
?>