<?php

include '../Model/Form.php'; 


if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name    = $_POST['product_name'];
    $quantity        = $_POST['quantity'];
    $price           = $_POST['price'];
    $display_product = $_POST['display_product'];

    $sql = "UPDATE products 
            SET product_name='$product_name', quantity='$quantity', price='$price', display_product='$display_product' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    header("Location: index.php");
    exit();
}
?>