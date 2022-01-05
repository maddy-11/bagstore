<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Product</title>
</head>
<body>
<?php include 'php/links.php' ?>
<?php include 'header.php' ?>


<div class="container">
	<h1 class="font my-3">Delete Any Product</h1>
	<table width="100%" class="table table-striped">
		<thead>
		<th>Image</th>	
		<th>Product</th>
		<th>Rattings</th>
		<th>Price</th>
		<th>Delete</th>
		</thead>
		<tbody>
			<?php
			$fetchQ = mysqli_query($connection,"select * from items");
			while($fetch = mysqli_fetch_array($fetchQ))
			{
				?>
				<tr>
				<td><img src="<?php echo $fetch['image'];?>" class = "image"></td>
				<td><?php echo $fetch['product_name']; ?></td>
				<td><div> <?php
				$i=1;
					while($i <= $fetch['rattings']) {?>
						<img src="images/star-icon.png">
					<?php $i++; } ?>
				</div></td>
				<td>$<?php echo $fetch['price']; ?></td>
				<td> <a href="php/del_item_completely.php?product_id=<?php echo $fetch['product_id'] ?>"><i class="fa fa-trash fs-1"></i></a></td>
				</tr>

				<?php
			}
			?>
		</tbody>

	</table>
</div>
</body>
</html>
<style>
	td{
		width:10%;
	}
	.image{
		height: 90px;
	}
</style>