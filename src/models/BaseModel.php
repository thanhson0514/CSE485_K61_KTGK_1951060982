<?php

class BaseModel
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = '1951060982_employees';
    public $conn;
    public $tableName = "NHANVIEN";

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            $msg = 'Lỗi kết nối';
            header("location: /index.php?action=error&error={$msg}");
        }
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
