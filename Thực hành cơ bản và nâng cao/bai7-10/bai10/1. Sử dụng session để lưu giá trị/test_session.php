<?php 
    session_start();
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
    <br>
    <a href="huy_session">Hủy session</a>
</body>
</html>