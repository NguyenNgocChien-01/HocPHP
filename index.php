<ul>
    <!-- Tạo một biến tên page_layout = trangchu (lưu ý không space) -->
    <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
    <li><a href="index.php?page_layout=lienhe">Liên hệ</a></li>
    <li><a href="index.php?page_layout=sanpham">Sản phẩm</a></li>
    <li><a href="index.php?page_layout=giohang">Giỏ hàng</a> </li>
</ul>

<?php 
    // sử dụng $_GET mới được
    if(isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'trangchu':
                include "trangchu.php";
                break;
            case 'lienhe':
                include "lienhe.php";
                break;
            case 'sanpham':
                include "sanpham.php";
                break;
            case 'giohang':
                include "giohang.php";
                break;
            default:
                # code...
                break;
        }
    }

?>