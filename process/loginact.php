<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_POST['submit'])){
            $a_username = mysqli_real_escape_string($conn ,$_POST['a_username']);
            $a_password = mysqli_real_escape_string($conn , $_POST['a_password']);
            $sql = "SELECT * FROM `admin` WHERE `a_username` = '".$a_username."' AND `a_password` = '".$a_password."'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
            if($row > 0){
                $_SESSION["a_id"] = $row["a_id"];
                $_SESSION["a_title"] = $row["a_title"];
                $_SESSION["a_name"] = $row["a_name"];
                $_SESSION["a_surname"] = $row["a_surname"];
                header('Location: ../administrator_page.php');
            }else{
                header('Location: ../login_admin.php?status=error');
            }
    }
?>
