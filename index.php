<?php
    // kết nối CSDL
    include "connect.php";

    // xóa dữ liệu

    $sql = "DELETE FROM thanhvien WHERE id ='2' ";
    mysqli_query($conn, $sql);
?>

