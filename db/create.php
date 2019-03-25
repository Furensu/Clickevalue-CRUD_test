<?php 
    require('connection.php');
    
    $userN = $_POST['userName'];
        
    $userM = $_POST['userMail'];
        
    $userP = $_POST['userPass'];

    $insert = "INSERT INTO users(username, mail, passw) VALUES ('$userN', '$userM', '$userP')";


    if (mysqli_query($conn,$insert)) {
        header('Location: /index.php');
    }else {
        echo 'error'.mysqli_error($conn);
    }
    
?>