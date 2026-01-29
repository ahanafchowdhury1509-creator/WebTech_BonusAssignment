<?php
include '../Model/DB.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = $id";

    if (!mysqli_query($conn, $sql)) {
        echo "Error deleting record: " . mysqli_error($conn);
        exit();
    }
}

header("Location: Form.php");
exit();
?>
