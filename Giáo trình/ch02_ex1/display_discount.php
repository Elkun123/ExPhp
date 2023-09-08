<?php
    $product_description = filter_input(INPUT_POST,'product_description');
    $list_price = filter_input(INPUT_POST,'list_price');
    $discount_percent = filter_input(INPUT_POST,'discount_percent');

    $discountAmount = $list_price * $discount_percent * 0.01;
    $discount = $list_price - $discountAmount;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span>$<?php echo $list_price; ?>.00</span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?>%</span><br>

        <label>Discount Amount:</label>
        <span>$<?php echo $discountAmount; ?>.00</span><br>

        <label>Discount Price:</label>
        <span>$<?php echo $discount; ?>.00</span><br>
    </main>
</body>
</html>