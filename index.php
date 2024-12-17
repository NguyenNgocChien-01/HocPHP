<?php
    // kết nối CSDL
    include "connect.php";

    // update dữ liệu

    $id = 2 ;
    $account = 'Huong' ;
    $passwrd = 'Huong' ;
    $level = 2;

    $sql = "UPDATE thanhvien SET id='$id', account='$account', 
     passwrd = '$passwrd' , level='$level' WHERE  id = '1' ";
    mysqli_query($conn, $sql);
?>

