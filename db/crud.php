<?php 
   # require_once('connection.php');
    $conn = connec();
    $query = 'SELECT * FROM users';

    $result = mysqli_query($conn,$query);
    
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    mysqli_free_result($result);

    mysqli_close($conn);
    
    /*if (isset($_POST['create'])) {
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
    }*/
    
?>