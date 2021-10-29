<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] ==''){
        header('location:../admin_print_certificate.php?status=error');
    }else{
        $c_id = filter_input(INPUT_POST, 'c_id' , FILTER_SANITIZE_STRING);
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);
        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_type1 = filter_input(INPUT_POST, 'c_type1' , FILTER_SANITIZE_STRING);
        $c_type2 = filter_input(INPUT_POST, 'c_type2' , FILTER_SANITIZE_STRING);

    
        $sql = "UPDATE custom_certificate SET
        c_ref_code = '$c_ref_code',
        c_name = '$c_name',
        c_type1 = '$c_type1',
        c_type2 = '$c_type2'
        WHERE c_id = '$c_id'
        ";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:../admin_print_certificate.php?status=success');
        }else{
            header('location:../admin_print_certificate.php?status=error');
        }
        
    }

?>