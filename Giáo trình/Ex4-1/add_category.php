<?php

    require_once('database.php');

    $name= filter_input(INPUT_POST,'name');

    $sql = " INSERT INTO categories(categoryName) VALUE (:name)";
    $statement = $db->prepare($sql);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();

    header('location:category_list.php');
?>