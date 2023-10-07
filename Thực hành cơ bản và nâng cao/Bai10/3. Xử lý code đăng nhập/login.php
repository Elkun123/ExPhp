<?php
    include "connect.php";

    session_start();

    if( isset($_SESSION['mySession']) ){
        header('location:index.php');
    }

    if( isset($_POST['btn']) ){
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM Accounts WHERE username='$username' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if( mysqli_num_rows($result) == 1 ){
            $_SESSION['mySession'] = $username;   
            header("location:index.php");
        }
        else{
            echo 'Tài khoản hoặc mật khẩu sai !!';
        }
    }

?>

<form action="login.php" method="post">
    <p>Tên đăng nhập</p>
    <input type="text" name="username">
    <p>Mật khẩu</p>
    <input type="password" name="password">
    <br>
    <br>
    <button type="submit" name="btn">Đăng nhập</button>
    <button><a href="signup.php">Đăng ký</a></button>
</form>