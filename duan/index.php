<?php 
    include "config/database.php";

    $data = new database();

    $data->select('SELECT * FROM thanhvien');

    $i = 0;
    while($r = $data->fetch()) {
        $i++;

        echo "<tr>";
        echo "<td>" . $r['id'] . "</td>";
        echo "<td>" . $r['hoten'] . "</td>";
        
        echo "</tr>";
        echo "<br>";
    }

?>