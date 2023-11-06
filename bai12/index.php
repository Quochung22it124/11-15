<?php
include("funtions.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    if(isset($_POST['rate__submit'])){
        if(isset($_POST['rate'])){
            $rate = $_POST['rate'];
            setRatingInfo($id,$rate);
        }
    }

    $html = getProduct($id);

    include("template/view-products.php");
}else{
    $html = listProduct();
    include("template/list-products.php");
}
?>