<?php
    // kết nối CSDL
    include "connect.php";


    //  // câu lệnh tạo CSDL
    // $sql = " CREATE DATABASE dulieuweb ";


    // Câu lệnh tạo bảng
    $sql = "CREATE TABLE thanhvien (
        id          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        account     VARCHAR(30) NOT NULL,
        passwrd     VARCHAR(30) NOT NULL,
        level       INT(6)
    )";

    // thực thi truy vấn
    if($conn->query($sql) == TRUE){
        echo "Tao bang thanh cong";
    }else{
        echo "tao bang khong thanh cong";
    }
    
    
    
?>

