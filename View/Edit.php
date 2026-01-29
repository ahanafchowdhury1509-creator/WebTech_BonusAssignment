<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h1>Edit Product</h1>

<form method="POST">
    <label>Product Name:</label><br>
    <input type="text" name="product_name"
           value="<?php echo htmlspecialchars($product['product_name']); ?>" required>
    <br><br>

    <label>Quantity:</label><br>
    <input type="number" name="quantity"
           value="<?php echo $product['quantity']; ?>" required>
    <br><br>

    <label>Price:</label><br>
    <input type="number" name="price" step="0.01"
           value="<?php echo $product['price']; ?>" required>
    <br><br>

    <label>Display Product:</label><br>
    <select name="display_product" required>
        <option value="Yes" <?php if ($product['display_product'] === 'Yes') echo 'selected'; ?>>Yes</option>
        <option value="No" <?php if ($product['display_product'] === 'No') echo 'selected'; ?>>No</option>
    </select>
    <br><br>

    <button type="submit">Update</button>
    <a href="index.php">Cancel</a>
</form>

</body>
</html>