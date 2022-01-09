
<?php
require_once 'views/includes/head.php';
?>
<div class="container">
       <h2 class="mt-3 mb-3">
              Thêm thông tin độc giả
       </h2>
<form action="" method="post">
  <div class="mb-3">
    <label for="hovaten" class="form-label">Họ và tên</label>
    <input type="text" class="form-control" name="hovaten" value="">
  </div>
  <div class="mb-3">
    <label for="gioitinh" class="form-label">Giới tính</label>
    <input type="text" class="form-control" name="gioitinh" value="">
  </div>
  <div class="mb-3">
    <label for="namsinh" class="form-label">Năm sinh</label>
    <input type="date" class="form-control" name="namsinh" value="">
  </div>
  <div class="mb-3">
    <label for="nghenghiep" class="form-label">Nghề nghiệp</label>
    <input type="text" class="form-control" name="nghenghiep" value="">
  </div>
  <div class="mb-3">
    <label for="ngaycapthe" class="form-label">Ngày cấp thẻ</label>
    <input type="date" class="form-control" name="ngaycapthe" value="">
  </div>
  <div class="mb-3">
    <label for="ngayhethan" class="form-label">Ngày hết hạn</label>
    <input type="date" class="form-control" name="ngayhethan" value="">
  </div>
  <div class="mb-3">
    <label for="diachi" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" name="diachi" value="">
  </div>
  <input type="submit" name="submit" value="Save" class="btn btn-primary">
</form>
</div>