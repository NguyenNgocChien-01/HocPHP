<?php
// kết nối csdl
$server = "localhost";
$user = "root";
$pass = "";
$database = "my_csdl";
// Kết nối 4 cái trên lại

$conn = new mysqLi($server,$user,$pass,$database);

if ($conn){
    // kêt nối
    mysqLi_query($conn,"SET NAMES 'utf8' ");
  //  echo 'Kết nối thành công';
} else echo "Không kết nối được";

?>