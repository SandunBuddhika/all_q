<?php

$id = $_GET["id"];
$dbms = new mysqli("localhost", "root", "Watchdogs09,", "theshop", "3306");
$q = "SELECT * FROM products WHERE `id`='" . $id . "';";
$resultset =  $dbms->query($q);
$data = $resultset->fetch_assoc();
$j = '{"pn":"' .  $data["product_name"] . '","pm":"' . $data["model"] . '","pb":"' . $data["brand_name"] . '","pc":"' . $data["product_category"] . '","pq":"' . $data["quantity"] . '","pe":"' . $data["expire_data"] . '","pp":"' . $data["price_per_unit"] . '","pi":"' . $data["product_image"] . '"}';
echo $j;
