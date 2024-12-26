<form action="" method="POST">
    <input type="text" placeholder="họ tên" name="hoten">
    <br>
    <input type="text" placeholder="username" name="username">
    <br>
    <input type="text" placeholder="pass" name="pass">
    <input type="submit" name="submit" value="Gửi">

</form>

<?php 
    include "config/database.php";
    $data = new Database();
    if(isset($_POST['submit'])){
        $hoten = $_POST['hoten'];
        $username =$_POST['username'];
        $pass = $_POST['pass'];
    }

    $data->command("UPDATE thanhvien SET hoten = '$hoten',username='$username', pass = '$pass' 
    WHERE id = 1");
?>