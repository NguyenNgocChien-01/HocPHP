

<!-- <?php 
    abstract class Person
    {
        ## chỉ sử dụng được public và protected
        protected $ten;
        protected $namsinh;

        ## hàm bắt buộc -> các class kế thừa phải có
        abstract public function Hi();

    }

    class SinhVien extends Person
    {
        public function Hi()
        {
            echo "Sinh viên say hi";
        }
    }

    $a = new SinhVien();
    $a->Hi();

?> -->



<!-- <?php 
    class MyClass
    {
        function __construct(){
            echo "Đối tượng đã được tạo";
        }
        function __destruct(){
            echo "Đối tượng đã bị xóa";
        }
    }
    $obj = new MyClass();
    $obj->__destruct();
?> -->



<!-- <?php 
    class A
    {
        function __construct(){
            echo "function class A";
        }
    }
    class B extends A {
        function __construct(){
            echo "function B chay"; 
        }
    }

    $a = new B(); ## chay ham xay dung B
?> -->




<!-- <?php 
class A
{
    private $username;
    private $password;

    function setUserName($_username)
    {
        $this->username = $_username;
    }

    function getUserName()
    {
        return $this->username;
    }

    function setPassWord($pass)
    {
        $this->password = $pass;
    }

    function getPassWord(){
        return md5($this->password);
    }
}

$a = new A();
$a->setUserName('Huong');
echo $a->getUserName();
$a->setPassWord("123");
echo $a->getPassWord();
?> -->





<!-- <?php 
    class DongVat
    {
        public $mat;
        public $mui;
        public $mieng; ## truy cập cuộc tính ở bất cứ nơi đâu

        function an(){
            echo 'dong vat dang an';
        }
    }
    ## ke thua xong
    class conTrau extends DongVat
    {
        function gioithieu()
        {
            $this->mat = 'Mat Xanh';
            $this->mui = 'Mui To';
            $this->mieng = 'Mieng Rong';
            parent::an(); ## ke thua phuong thuc
        }

    }


    $Trau = new conTrau();
    $Trau->gioithieu();
    echo $Trau->mat;
?> -->


<!-- <?php
    // class DongVat
    // {
    //     var $mat = '';
    //     var $mui = '';
    //     var $mieng = '';
    //     var $chan = '';
    // }

    class SieuNhan
    {
        public $ten;
        private $sucmanh;

        function set_sucmanh($a){
            if($a > 0){
                $this->sucmanh = $a;
            }else{
                $this->sucmanh = 0;
            }
        }
        ## Tạo điều kiện khi đúng mới hiển thị
        function get_sucmanh($dk){
            if ($dk == 1){
                return $this->sucmanh;
            }else{
                return 0;
            }

        }

    }
    $nguoinhen = new SieuNhan();
    $nguoinhen->ten = 'Nguoi nhen';
    $nguoinhen->set_sucmanh(80);
    echo $nguoinhen->ten;
    echo $nguoinhen->get_sucmanh(1);
?> -->


<!-- <?php
    class xemay
    {
        protected $loaixe;
    }

    class xehonda extends xemay{
        ## đã có tồn tại $loaixe vì kế thừa
        protected function thongtin(){
            echo   $this->loaixe ='Loai xe tam trung';
        }
    }

    // $HondaI5 = new xehonda();
    // $HondaI5->thongtin();  ## không chạy vì function protected

?> -->

<!-- 
<?php 
    Class A
    {
            public      $pb_A   =   'Public';
            private     $pvrt_A =   'Private';
            protected   $prtd_A =   'Protected';

            public function showPublic()
            {
                echo $this->pb_A;
            }

            private function showPrivate()
            {
                echo $this->prvt_A;
            }

            protected function showProtected()
            {
                echo $this->prtd_A;
            }
    }
    class B extends A
    {
        
    }
    class C extends B
    {

    }

    $doituong = new C();
    $doituong->showPublic();
    // $doituong->showPrivate(); ## Khong truy cap duoc vi private chi duoc
    ## su dung cho chinh class do

    $doituong->showProtected(); ## Khong truy cap duoc khi KE THUA LONG
?> -->

<?php 

    ## Định nghĩa hằng số bị sai => Hằng không thể sửa
    interface A
    {
        const A = 'Xin chào';
    }

    ## 
    class B implements A
    {
        const A = 'Hello';
    }

?>


<?php 
interface Dog
    {
        function run(); ## như v là đúng

        function eat(){
            ## sai, không được mở ngoặc;
        }
    }

interface catInterface
{
    public function chay();
    public function an(); 
}

class cat implements catInterface
{
    public function chay(){
        echo "chạy chạy chạy";
    }

    public function an(){
        echo " Ăn";
    }
}

?>

