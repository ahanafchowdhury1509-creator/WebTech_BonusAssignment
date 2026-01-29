<?php
include 'config.php'; 
$search = isset($_GET['q']) ? $_GET['q'] : '';

if (!empty($search)) {
    
    $stmt = mysqli_prepare($conn, "SELECT * FROM products WHERE display_product = 'Yes' AND product_name LIKE ? ORDER BY id DESC");
    $like = "%$search%";
    mysqli_stmt_bind_param($stmt, "s", $like);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} else {
    $sql = "SELECT * FROM products WHERE display_product = 'Yes' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
}
?>

<h2>Product List</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Display Product</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>$" . number_format($row['price'], 2) . "</td>";
                echo "<td>" . $row['display_product'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'>No products found</td></tr>";
        }

        
        if (!empty($search)) {
            mysqli_stmt_close($stmt);
        }

        ?>
    </tbody>
</table>
