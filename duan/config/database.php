<?php
class database
{
    private $conn = null;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'oopduan';
    private $result = null;

    // hàm kết nối
    private function connect(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database) or die('Kết nối thất bại');
        $this->conn->query('SET NAMES UTF8'); ## kết nối thư viện
    }

    // Hàm thực thi
    public function select($sql){
        ## kết nối
        $this->connect();
        $this->result = $this->conn->query($sql); 
    }

    // Hàm lấy dữ liệu
    public function fetch(){
        if($this->result->num_rows > 0){
            $rows = $this->result->fetch_assoc(); 
        }
        else{
            $rows = 0;
        }

        return $rows;
    }

    // Hàm dùng để insert, update, delete
    public function command($sql){
        $this->connect();
        $this->conn->query($sql);
    }
}
?>
