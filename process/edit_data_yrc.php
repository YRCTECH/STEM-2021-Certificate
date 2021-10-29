<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] ==''){
        header('location:../admin_print_yrc.php?status=error');
    }else{
        $c_id = filter_input(INPUT_POST, 'c_id' , FILTER_SANITIZE_STRING);
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);
        $c_type = filter_input(INPUT_POST, 'c_type' , FILTER_SANITIZE_STRING);
        $c_grade = filter_input(INPUT_POST, 'c_grade' , FILTER_SANITIZE_STRING);
        $c_team = filter_input(INPUT_POST, 'c_team' , FILTER_SANITIZE_STRING);
        $c_subject = filter_input(INPUT_POST, 'c_subject' , FILTER_SANITIZE_STRING);

        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_awards = filter_input(INPUT_POST, 'c_awards' , FILTER_SANITIZE_STRING);
        $c_status = filter_input(INPUT_POST, 'c_status' , FILTER_SANITIZE_STRING);

    
        $sql = "UPDATE yrc_certificate SET
        c_ref_code = '$c_ref_code',
        c_type = '$c_type',
        c_grade = '$c_grade',
        c_team = '$c_team',
        c_subject = '$c_subject',

        c_name = '$c_name',
        c_awards = '$c_awards',
        c_status = '$c_status'
        WHERE c_id = '$c_id'
        ";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:../admin_print_yrc.php?status=success');
        }else{
            header('location:../admin_print_yrc.php?status=error');
        }
        
    }

?>