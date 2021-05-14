<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productDescription = $_POST['product-description'];
    $listPrice = $_POST['discount-percent'];
    $discountPercent = $_POST['discount-percent'];

    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;

    echo "Amount of discount: " . $discountAmount .
         "<br> Price after discount:" . $discountPrice;
}