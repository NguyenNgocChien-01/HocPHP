<?php
    // kết nối CSDL
    include "connect.php";

    // chèn thẻ HTML vào mySQL  
    $sql = "SELECT * FROM thanhvien";

    $result = mysqLi_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    {
?>

 <h1> 
 <?php 
     echo $row['account'];
         echo "<br>";
        echo $row['passwrd'];
  ?>
 </h1>
    
<?php 
    } // chú ý dấu ngoặc của while
?>


