<?php

include_once __DIR__ . '/../models/BaseModel.php';

class EmployeeModel extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM nhanvien";

        $results = $this->conn->query($sql);
        $data = [];
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                array_push($data, $row);
            }
        } else {
            $msg = 'Lỗi truy vấn!';
            header("location: /index.php?error={$msg}");
        }

        return $data;
    }

    public function getOne($maNV)
    {
        $sql = "SELECT * FROM nhanvien WHERE MaNV = {$maNV}";

        $results = $this->conn->query($sql);
        $data = [];
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $data = $row;
            }
        } else {
            $msg = 'Lỗi truy vấn!';
            header("location: /index.php?error={$msg}");
        }

        return $data;
    }

    public function create($list)
    {
        $sql = "INSERT INTO NHANVIEN(hovaten, chucvu, phongban, luong, ngayvaolam) VALUES
        ('{$list['hovaten']}', '{$list['chucvu']}', '{$list['phongban']}', {$list['luong']}, '{$list['ngayvaolam']}')
        ";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        }

        return false;
    }

    public function update($employee)
    {
        $sql = "UPDATE {$this->tableName} 
            SET
            hovaten = '{$employee['hovaten']}',
            chucvu = '{$employee['chucvu']}',
            phongban = '{$employee['phongban']}',
            luong = {$employee['luong']},
            ngayvaolam = '{$employee['ngayvaolam']}'
        WHERE MaNV = {$employee['MaNV']};
        ";
        
        if ($this->conn->query($sql) === TRUE) {
            return true;
        }

        return false;
    }

    public function delete($maNV)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE MaNV = {$maNV}";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        }

        return false;
    }
}
