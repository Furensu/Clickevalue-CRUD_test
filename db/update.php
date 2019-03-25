<?php 
    require('connection.php');
    
    $userN = $_POST['updtU'];
        
    $userM = $_POST['updtM'];
        
    $userP = $_POST['updtP'];

    $userID = $_POST['updtID'];;

    $insert = "UPDATE users SET username = '$userN', mail = '$userM', passw = '$userP'
                WHERE id = {$userID}";


    if (mysqli_query($conn,$insert)) {
        header('Location: /index.php');
    }else {
        echo 'error'.mysqli_error($conn);
    }
    
?>