<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bill</title>
</head>
<body>

<?php 
include 'header.php';
if(isset($_POST['checkout']))
{
    $user = $_GET['id'];

    $query = mysli_query($connection,"select * from orders where user_id = $user");
    ?>
    <table>
        <thead>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Price</th>
        </thead>
    <?php
    while($fetch = mysli_fetc_array($query))
    {
    ?>
        <td><?php echo $fetch['product_id'] ?></td>
        <td><?php echo $fetch['product_name'] ?></td>
        <td><?php echo $fetch['quantity'] ?></td>
        <td><?php echo $fetch['price'] ?></td>
        <td><?php echo $fetch['t_price'] ?></td>
    <?php
    }
    ?>
    </table>
    <?php
}
?>
</body>
</html>