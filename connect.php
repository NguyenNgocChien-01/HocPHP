<?php
    //kết nối database
    // Gọi 4 thứ : sever (localhost) | user (root) | mật khẩu | tên database
    $server = "localhost";
    $user ="root"; 
    $passwd="";
    $database="dulieuweb";
    $conn = new mysqLi($server, $user, $passwd, $database);

    // kiểm tra xem đã kết nối hay chưa
    if($conn){
         mysqLi_query($conn, "SET NAMES 'utf8'");
    }

?>