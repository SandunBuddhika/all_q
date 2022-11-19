<?php
$pn = $_POST["pn"];
$pb = $_POST["pb"];
$pc = $_POST["pc"];
$pm = $_POST["pm"];
$pq = $_POST["pq"];
$pe = $_POST["pe"];
$pp = $_POST["pp"];
if (isset($_FILES["pi"])) {
    $file  = $_FILES["pi"];
}
if(empty($pn)){
    echo "Please add a product name";
}else if(empty($pb)){
    echo "Please add a brand";
}else if(empty($pc)){
    echo "Please add a Categary";
}else if(empty($pm)){
    echo "Please add a model name";
}else if(empty($pq)){
    echo "Please add a Quantity";
}else if(empty($pe)){
    echo "Please add a Expire Date";
}else if(empty($pp)){
    echo "Please add a Price per unit";
}else{
    $filename = "image//".uniqid().".png";
    move_uploaded_file($file["tmp_name"],$filename);
    $dbms = new mysqli("localhost","root","Watchdogs09,","theshop","3306");
    $q = "INSERT INTO products (`product_name`,`product_category`,`brand_name`,`model`,`quantity`,`price_per_unit`,`expire_data`,`product_image`) VALUE('".$pn."','".$pc."','".$pb."','".$pm."','".$pq."','".$pp."','".$pe."','".$filename."')";
    $dbms->query($q);
    echo "1";
}
