<?php
    session_start();
    include("../connect/connect.php");
    
    if(isset($_GET['id'])){
        $c_id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);
        $sql = "DELETE FROM custom_certificate WHERE c_id  = '$c_id';";
        $result = mysqli_query($conn,$sql);
    
        if($result){
            header('location:../admin_print_certificate.php?status=success');
        }else{
            header('location:../admin_print_certificate.php?status=error');
        }
    }


?>