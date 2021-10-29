<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] ==''){
        header('location:../admin_print_adviser.php?status=error');
    }else{
        $c_id = filter_input(INPUT_POST, 'c_id' , FILTER_SANITIZE_STRING);
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);
        $c_type = filter_input(INPUT_POST, 'c_type' , FILTER_SANITIZE_STRING);
        $c_grade = filter_input(INPUT_POST, 'c_grade' , FILTER_SANITIZE_STRING);
        $c_team = filter_input(INPUT_POST, 'c_team' , FILTER_SANITIZE_STRING);
        $c_school = filter_input(INPUT_POST, 'c_school' , FILTER_SANITIZE_STRING);
        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_awards = filter_input(INPUT_POST, 'c_awards' , FILTER_SANITIZE_STRING);
        $c_awards_detail = filter_input(INPUT_POST, 'c_awards_detail' , FILTER_SANITIZE_STRING);

    
        $sql = "UPDATE adviser_certificate SET
        c_ref_code = '$c_ref_code',
        c_type = '$c_type',
        c_grade = '$c_grade',
        c_team = '$c_team',
        c_school = '$c_school',
        c_name = '$c_name',
        c_awards = '$c_awards',
        c_awards_detail = '$c_awards_detail'
        WHERE c_id = '$c_id'
        ";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:../admin_print_adviser.php?status=success');
        }else{
            header('location:../admin_print_adviser.php?status=error');
        }
        
    }

?>