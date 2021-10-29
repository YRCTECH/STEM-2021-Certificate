<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['insert'])){
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);
        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_type1 = filter_input(INPUT_POST, 'c_type1' , FILTER_SANITIZE_STRING);
        $c_type2 = filter_input(INPUT_POST, 'c_type2' , FILTER_SANITIZE_STRING);

    
        $sql = "INSERT INTO `custom_certificate` (`c_id`, `c_ref_code`, `c_name`, `c_type1`, `c_type2`) 
        VALUES (NULL, '$c_ref_code', '$c_name', '$c_type1', '$c_type2');";
        $query = mysqli_query($conn,$sql);
        if($query){
            $sql2 = "INSERT INTO `refcode_certificate` (`c_id`, `c_ref_code`) 
            VALUES (NULL, '$c_ref_code');";
            $query2 = mysqli_query($conn,$sql2);
            if($query2){
                header('location:../admin_print_certificate.php?status=success');
            }else{
                header('location:../admin_print_certificate.php?status=error');
            }
        }else{
            header('location:../admin_print_certificate.php?status=error');
        }
               
    }

?>