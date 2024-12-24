<?php 
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
?>


<?php
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
?>


<?php
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

?>


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
?>