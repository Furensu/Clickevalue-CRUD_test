<?php 
   
    $query = 'SELECT * FROM users';

    $result = mysqli_query($conn,$query);
    
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    
    mysqli_free_result($result);

    mysqli_close($conn);
        
?>