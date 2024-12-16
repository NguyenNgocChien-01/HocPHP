<?php

    // kết nối CSDL
    include "connect.php";
    
    // câu lệnh tạo CSDL
    $sql = " CREATE DATABASE CSDL ";

        // chạy thành công tạo ra 1 database mới
    if(mysqli_query($conn, $sql)){
        echo "create database successfully";
    }else{
        echo "create database failed";
    }

    
?>
