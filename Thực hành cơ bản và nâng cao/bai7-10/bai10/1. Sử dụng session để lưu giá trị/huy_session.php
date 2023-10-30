<?php 
    session_start();
    unset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Chào bạn '.$_SESSION['name']. ' có tuổi là: '.$_SESSION['age'];
    ?>
</body>
</html>