<?php 
    require('connection.php');

    $userI = $_POST['delete'];

    $delete = "DELETE FROM `users` WHERE `users`.`id` = $userI";


    if (mysqli_query($conn,$delete)) {
        header('Location: /index.php');
    }else {
        echo 'error'.mysqli_error($conn);
    }
    
?>