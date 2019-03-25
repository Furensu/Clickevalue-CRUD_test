<?php 
    #require_once('connection.php');
    
    echo $_POST['create'];
    
    if (isset($_POST['create'])) {
        $conn = connec(); 
        $userN = $_POST['userName'];
        
        $userM = $_POST['userMail'];
        
        $userP = $_POST['userPass'];
        $insert = "INSERT INTO users(username, mail, passw) VALUES ('$userN', '$userM', '$userP')";

        if (mysqli_query($conn,$insert)) {
            header('Location : http://localhost:4000/');
        }else {
            echo 'error'.mysqli_error($conn);
        }
        mysqli_close($conn);
        unset($_POST['create'],$_POST['userName'],$_POST['userMail'],$_POST['userPass']);
    }
    
?>