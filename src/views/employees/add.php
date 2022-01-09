<?php include_once __DIR__ . '/../layouts/header.php' ?>

<div class="container">
    <h1 class="text-center">Thêm nhân viên</h1>
    <form action="/index.php?action=add" method="POST">
        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="hovaten" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Chức vụ</label>
            <input type="text" name="chucvu" class="form-control" />
        </div>
        <div class="mb-3">
            <label class="form-label">Phòng ban</label>
            <select name="phongban" class="form-select">
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
                <option value="C3">C3</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">lương</label>
            <input type="number" name="luong" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày vào làm</label>
            <input type="date" name="ngayvaolam" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php include_once __DIR__ . '/../layouts/footer.php' ?>