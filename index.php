<?php
    // kết nối CSDL
    include "connect.php";

    if(isset($_POST['btn'])){


            // câu lệnh tạo CSDL
    $sql = " CREATE DATABASE " . $_POST['database'];

    // chạy thành công tạo ra 1 database mới
    if(mysqli_query($conn, $sql)){
        echo "create database successfully";
    }else{
        echo "create database failed";
    }

    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Tên CSDL: <input type="text" name="database">
        <input type="submit" name="btn" value="Tạo CSDL">
    </form>
</body>
</html>
