

<ul>
    <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
    <li><a href="index.php?page_layout=sanpham">Sản Phẩm</a></li>
    <li><a href="index.php?page_layout=lienhe">Liên hệ</a></li>
    <li><a href="index.php?page_layout=giohang">Giở hàng</a></li>
</ul>

<?php
// Kết nối database
include "ketnoicsdl.php";
//
if (isset($_GET["page_layout"]) ) {

    switch($_GET["page_layout"]){
        case "trangchu"; include "trangchu.php"; break;
        case "sanpham"; include "sanpham.php"; break;
        case "lienhe"; include "lienhe.php"; break;
        case "giohang"; include "giohang.php"; break;
    }
}
if (isset($_POST["submit"])){
// Tạo database
$csdl = $_POST["name"];
 $sql = "create database ". $csdl; // Câu lệnh SQL
 if (mysqLi_query($conn , $sql) ){
    echo "Tạo thành công database: ".$csdl;
 }
 else "Chưa tạo được database: ".$csdl;


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
        <label>Nhập tên DATABASE: </label>
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
</body>
</html>