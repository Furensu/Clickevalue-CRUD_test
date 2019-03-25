<?php 
    function connec(){
        $connec = mysqli_connect('localhost','root','','sample_crud','3306');

    if (mysqli_connect_errno()) {
        # code...
        echo "Não foi possivel conectar ao MySQL ".mysqli_connect_errno();
    }
    return $connec;
    }
?>