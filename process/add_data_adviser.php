<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['insert'])){
        $c_ref_code = filter_input(INPUT_POST, 'c_ref_code' , FILTER_SANITIZE_STRING);
        $c_type = filter_input(INPUT_POST, 'c_type' , FILTER_SANITIZE_STRING);
        $c_grade = filter_input(INPUT_POST, 'c_grade' , FILTER_SANITIZE_STRING);
        $c_team = filter_input(INPUT_POST, 'c_team' , FILTER_SANITIZE_STRING);
        $c_school = filter_input(INPUT_POST, 'c_school' , FILTER_SANITIZE_STRING);
        $c_name = filter_input(INPUT_POST, 'c_name' , FILTER_SANITIZE_STRING);
        $c_awards = filter_input(INPUT_POST, 'c_awards' , FILTER_SANITIZE_STRING);
        $c_awards_detail = filter_input(INPUT_POST, 'c_awards_detail' , FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO `adviser_certificate` (`c_id`, `c_ref_code`, `c_type`, `c_grade`, `c_team`, `c_school`,`c_name`, `c_awards`, `c_awards_detail`) 
        VALUES (NULL, '$c_ref_code', '$c_type', '$c_grade', '$c_team', '$c_school', '$c_name', '$c_awards', '$c_awards_detail');";
        $query = mysqli_query($conn,$sql);
        if($query){
            $sql2 = "INSERT INTO `refcode_certificate` (`c_id`, `c_ref_code`) 
            VALUES (NULL, '$c_ref_code');";
            $query2 = mysqli_query($conn,$sql2);
            if($query2){
                header('location:../admin_print_adviser.php?status=success');
            }else{
                header('location:../admin_print_adviser.php?status=error');
            }
        }else{
            header('location:../admin_print_adviser.php?status=error');
        }
               
    }

?>