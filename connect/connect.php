<?php
    $host = 'localhost';
    $user = 'whitemalt';
    $pass = 'nonnahee';
    $db = 'yrcstem2021';

    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_errno){
        die("Connect failed" .$conn->connect_errno);
    }

    $conn->set_charset('UTF8')

?>