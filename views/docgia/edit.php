<!-- <div style="color: red">
    <?php echo $error; ?>
</div>
<form action="" method="post">
    Name:
    <input type="text"
           name="name"
           value="<?php
           echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
</form> -->


<?php
require_once 'views/includes/head.php';
?>
<div class="container-fluid">
       <h2 class="mt-3 mb-3">
              Sửa thông tin độc giả
       </h2>
<form action="" method="post">
  <div class="mb-3">
    <label for="hovaten" class="form-label"></label>
    <input type="text" class="form-control" name="hovaten" value="<?php
           echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $docgia['hovaten']?>">
  </div>
  <div class="mb-3">
    <label for="gioitinh" class="form-label"></label>
    <input type="text" class="form-control" name="gioitinh" value="<?php
           echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $docgia['gioitinh']?>">
  </div>
  <div class="mb-3">
    <label for="namsinh" class="form-label"></label>
    <input type="text" class="form-control" name="namsinh" value="<?php
           echo isset($_POST['namsinh']) ? $_POST['namsinh'] : $docgia['namsinh']?>">
  </div>
  <div class="mb-3">
    <label for="nghenghiep" class="form-label"></label>
    <input type="text" class="form-control" name="nghenghiep" value="<?php
           echo isset($_POST['nghenghiep']) ? $_POST['nghenghiep'] : $docgia['nghenghiep']?>">
  </div>
  <div class="mb-3">
    <label for="ngaycapthe" class="form-label"></label>
    <input type="date" class="form-control" name="ngaycapthe" value="<?php
           echo isset($_POST['ngaycapthe']) ? $_POST['ngaycapthe'] : $docgia['ngaycapthe']?>">
  </div>
  <div class="mb-3">
    <label for="ngayhethan" class="form-label"></label>
    <input type="date" class="form-control" name="ngayhethan" value="<?php
           echo isset($_POST['ngayhethan']) ? $_POST['ngayhethan'] : $docgia['ngayhethan']?>">
  </div>
  <div class="mb-3">
    <label for="diachi" class="form-label"></label>
    <input type="text" class="form-control" name="diachi" value="<?php
           echo isset($_POST['diachi']) ? $_POST['diachi'] : $docgia['diachi']?>">
  </div>
  <input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>
</div>