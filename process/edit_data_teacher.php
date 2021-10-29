<?php
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] ==''){
        header('location:../admin_print_teacher.php?status=error');
    }else{
        $c_id = filter_input(INPUT_POST, 'c_id' , FILTER_SANITIZE_STRING);
        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_awards = filter_input(INPUT_POST, 'c_awards' , FILTER_SANITIZE_STRING);
        $c_school = filter_input(INPUT_POST, 'c_school' , FILTER_SANITIZE_STRING);
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);

        $sql = "UPDATE teacher_certificate SET
        c_name = '$c_name',
        c_awards = '$c_awards',
        c_school = '$c_school',
        c_ref_code = '$c_ref_code'
        WHERE c_id = '$c_id'
        ";
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:../admin_print_teacher.php?status=success');
        }else{
            header('location:../admin_print_teacher.php?status=error');
        }
        
    }

?>