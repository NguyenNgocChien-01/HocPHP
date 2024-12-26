
<?php 
    Class dongvat
    {
        ## mặc định là public, nhưng vẫn nên để phạm vi là public
        public function an(){
            echo 'động vật đang ăn';
        }

        
    }

    class conheo extends dongvat{
        public function an(){
            parent::an();
            echo 'con heo đang ăn cám';
        }
    }

    class conmeo extends dongvat{
        public function an(){
            parent::an();
            echo 'con heo đang ăn cơm';
        }
    }



    $conHeo = new conheo();
    $conHeo->an();
?>
