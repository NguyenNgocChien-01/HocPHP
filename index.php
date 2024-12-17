<?php
    // kết nối CSDL
    include "connect.php";

    $id="";
    $account= 'admin';
    $passwrd='123456';
    $level = 1;
    
    $sql = "INSERT INTO thanhvien (id, account, passwrd, level) 
            VALUES('$id', '$account', '$passwrd', '$level');
    ";

    mysqli_query($conn, $sql);


?>

