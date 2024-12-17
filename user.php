<?php 
    include "connect.php";

    // lấy id dữ liệu mySQL
    $sql = "SELECT * FROM thanhvien";

    $result = mysqli_query($conn , $sql);

    while($row = mysqli_fetch_array($result))
    {
?>

 <tr> 

     <td> <?php  echo $row['id'];        ?> </td>  
     <td> <?php  echo $row['account'];   ?> </td>  
     <td> <?php  echo $row['passwrd'];   ?> </td> 
     <td> <?php  echo $row['level'];     ?> </td> 
    <span> <a href="edit.php?this_id=<?php echo $row['id'] ?>">Sửa</a></span>
    <span> <a href="">Xóa</a></span>
    <td> <?php  echo "<br>"             ?> </td> 
 </tr>
    
<?php 
    } // chú ý dấu ngoặc của while
?>