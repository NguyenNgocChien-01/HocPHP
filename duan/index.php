<form action="index.php" method="POST">

<input type="text" placeholder="Họ tên" name="hoten">
<input type="text" placeholder="Tài khoản" name="username">
<input type="text" placeholder="mật khẩu" name="pass">
<input type="submit" name = "submit" value="Gửi">

</form>

<?php 
    include "config/database.php";

    $data = new database();

   if(isset($_POST['submit'])){
    $hoten = $_POST['hoten'];
    $username=$_POST['username'];
    $pass = $_POST['pass'];
        $sql = "INSERT INTO thanhvien VALUES(null,'$hoten', '$username', '$pass')"; 
        $data->command($sql);
   }

   

?>