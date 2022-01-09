<?php include_once __DIR__ . '/../layouts/header.php' ?>
<h1 class="text-center">Quản lý nhân viên</h1>
<a class="btn btn-primary" href="/index.php?action=add">Thêm</a>
<table class='table'>
    <thead>
        <tr>
            <th scope="col">Mã nhân viên</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">phòng ban</th>
            <th scope="col">lương</th>
            <th scope="col">ngày vào làm</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $employee) { ?>

            <tr>
                <th scope="row"><?= $employee['MaNV'] ?></th>
                <td scope="row"><?= $employee['hovaten'] ?></td>
                <td scope="row"><?= $employee['chucvu'] ?></td>
                <td scope="row"><?= $employee['phongban'] ?></td>
                <td scope="row"><?= $employee['luong'] ?></td>
                <td scope="row"><?= $employee['ngayvaolam'] ?></td>
                <td>
                    <a href="/index.php?action=update&id=<?= $employee['MaNV'] ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <a href="/index.php?action=delete&id=<?= $employee['MaNV'] ?>">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<?php include_once __DIR__ . '/../layouts/footer.php' ?>