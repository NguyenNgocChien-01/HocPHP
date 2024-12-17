<?php
    // kết nối CSDL
    include "connect.php";

    // Câu lệnh WHERE 83
    $sql = "SELECT * FROM thanhvien WHERE id = 1";
    // Câu lệnh AND
    $sql = "SELECT * FROM thanhvien WHERE id = 1 AND account = 'Huong'";

    // Câu lệnh OR 
    $sql = "SELECT * FROM thanhvien WHERE id = 1 OR id = 2 ";

    // Câu lệnh LIKE
    $sql = "SELECT * FROM thanhvien WHERE account LIKE ='%uo%' ";
    
    // Câu lệnh ORDER BY
    $sql = "SELECT * FROM thanhvien ORDER BY id ASC "; // sắp xếp tăng dần theo id
    $sql = "SELECT * FROM thanhvien ORDER BY id DESC "; // sắp xếp giảm dần theo id

    // Câu lệnh LIMIT
    $sql = "SELECT * FROM thanhvien LIMIT 0,2";


    // Câu lệnh RAND() (random)
    
    $sql = "SELECT * FROM thanhvien RAND() LIMIT 0,2 ";


    // Câu lệnh INNER JOIN
    $sql = "SELECT * FROM thanhvien INNER JOIN details ON thanhvien.id = details.id";


    $result = mysqLi_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    {
        echo $row['id']; // in này kia
    }


?>


91
