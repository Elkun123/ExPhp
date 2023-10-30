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
            if(isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
                echo 'Xin chào '.$_COOKIE['username'];
            }
        ?>  
        <a href="logout.php">Logout</a>
</body>
</html>