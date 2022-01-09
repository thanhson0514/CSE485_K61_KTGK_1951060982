<?php

include_once __DIR__ . '/../models/EmployeeModel.php';

class EmployeeController
{
    public function index()
    {
        $Employee = new EmployeeModel();
        $data = $Employee->getAll();

        require_once __DIR__ . '/../views/employees/index.php';
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            foreach ($_POST as $key => $value) {
                $$key = $value;
            }

            $list_employees = [
                'hovaten' => $hovaten,
                'chucvu' => $chucvu,
                'phongban' => $phongban,
                'luong' => $luong,
                'ngayvaolam' => $ngayvaolam
            ];

            $Employee = new EmployeeModel();
            $isInsert = $Employee->create($list_employees);

            if ($isInsert) {
                header('location: /index.php');
                exit();
            }

            $msg = 'Lỗi thêm dữ liệu';
            header("location: /index.php?action=error&error=$msg");
        }

        require_once __DIR__ . '/../views/employees/add.php';
    }

    public function delete()
    {
        $maNV = $_GET['id'];

        $Employee = new EmployeeModel();
        $isDelete = $Employee->delete($maNV);

        if ($isDelete) {
            header('location: /index.php');
            exit();
        }

        $msg = 'Xóa thất bại';
        header("location: /index.php?action=error&error={$msg}");
    }

    public function update()
    {
        $maNV = $_GET['id'];
        $Employee = new EmployeeModel();
        $data = $Employee->getOne($maNV);

        if (isset($_POST['submit'])) {
            foreach ($_POST as $key => $value) {
                $$key = $value;
            }

            $list_employees = [
                'MaNV' => $maNV,
                'hovaten' => $hovaten,
                'chucvu' => $chucvu,
                'phongban' => $phongban,
                'luong' => $luong,
                'ngayvaolam' => $ngayvaolam
            ];

            $isUpdate = $Employee->update($list_employees);
            if ($isUpdate) {
                header('location: /index.php');
            } else {
                $msg = 'Cập nhật thất bại!';
                header("location: /index.php?action=error&error={$msg}");
            }
        }

        require_once __DIR__ . '/../views/employees/update.php';
    }

    public function error()
    {
        require_once __DIR__ . '/../views/error.php';
    }
}
