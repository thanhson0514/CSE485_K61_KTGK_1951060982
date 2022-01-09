<?php include_once __DIR__ . '/../layouts/header.php' ?>

<div class="container">
    <h1 class="text-center">Cập nhật nhân viên</h1>
    <form action="/index.php?action=update&id=<?= $maNV ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="hovaten" class="form-control" value="<?= $data['hovaten'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Chức vụ</label>
            <input type="text" name="chucvu" class="form-control" value="<?= $data['chucvu'] ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label">Phòng ban</label>
            <select name="phongban" class="form-select">
                <option value="A1" <?= $data['phongban'] === 'A1' ? 'selected' : '' ?>>A1</option>
                <option value="A2" <?= $data['phongban'] === 'A2' ? 'selected' : '' ?>>A2</option>
                <option value="B1" <?= $data['phongban'] === 'B1' ? 'selected' : '' ?>>B1</option>
                <option value="B2" <?= $data['phongban'] === 'B2' ? 'selected' : '' ?>>B2</option>
                <option value="C1" <?= $data['phongban'] === 'C1' ? 'selected' : '' ?>>C1</option>
                <option value="C2" <?= $data['phongban'] === 'C2' ? 'selected' : '' ?>>C2</option>
                <option value="C3" <?= $data['phongban'] === 'C3' ? 'selected' : '' ?>>C3</option>
                <option value="none" default>none</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">lương</label>
            <input type="number" name="luong" class="form-control" value="<?= $data['luong'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày vào làm</label>
            <input type="date" name="ngayvaolam" class="form-control" value="<?= $data['ngayvaolam'] ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php include_once __DIR__ . '/../layouts/footer.php' ?>