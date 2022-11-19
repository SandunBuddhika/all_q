<?php

$dbms = new mysqli("localhost", "root", "Watchdogs09,", "theshop", "3306");
$q = "SELECT * FROM products";
$resultset =  $dbms->query($q);
$n = $resultset->num_rows;

?>

<tr class="head_tr">
    <td>Product Name</td>
    <td>Model</td>
    <td>Brand</td>
    <td>Categary</td>
    <td>Quantity</td>
    <td>Expire Date</td>
    <td>Price per unit</td>
    <td>Product Image</td>
</tr>

<?php
for ($i = 0; $i < $n; $i++) {

    $data = $resultset->fetch_assoc();
?>
    <tr>
        <td><?php echo $data["product_name"] ?></td>
        <td><?php echo $data["model"] ?></td>
        <td><?php echo $data["brand_name"] ?></td>
        <td><?php echo $data["product_category"] ?></td>
        <td><?php echo $data["quantity"] ?></td>
        <td><?php echo $data["expire_data"] ?></td>
        <td><?php echo $data["price_per_unit"] ?></td>
        <td><img src="<?php echo $data["product_image"] ?>" style="width: 100px;" /></td>
    </tr>
<?php
}
?>