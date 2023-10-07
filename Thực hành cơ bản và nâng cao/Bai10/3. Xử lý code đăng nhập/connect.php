<?php

    $servername = "localhost";
    $username = "root";
    $password = "24082004";
    $database = "test";

    $conn = new mysqLi($servername, $username, $password, $database);

    if($conn)
    {
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        // echo 'Đã kết nối thành công';
        // echo '<br/>';
    }
    else{
        echo 'no';
    }
?>