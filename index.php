<?php
    // kết nối CSDL
    include "connect.php";

    $sql ="SELECT * FROM  thanhvien";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0){
       // chuyển bảng thành array
        while( $row = mysqli_fetch_array($result)){ // mỗi dòng là 1 array
            echo $row['id']. " | " .$row['account'] . " | " .$row['passwrd'] .  " | " .$row['level'] .  "<br>";
        }
    }
?>

