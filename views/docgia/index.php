<?php
//file hiển thị thông báo lỗi
// require_once 'views/commons/message.php';
require_once 'views/includes/head.php';
?>

<div class="container-fluid">
<a href="index.php?controller=docgia&action=add" class="btn btn-primary mt-3 mb-3">
    Thêm độc giả
</a>

</button>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>Mã độc giả</th>
        <th>Học và tên</th>
        <th>Giới tính</th>
        <th>Năm sinh</th>
        <th>Nghề nghiệp</th>
        <th>Ngày cấp thẻ</th>
        <th>Ngày hết hạn</th>
        <th>Địa chỉ</th>
    </tr>
    <?php if (!empty($cacdocgia)): ?>
        <?php foreach ($cacdocgia AS $docgia) : ?>
            <tr>
                <td><?php echo $docgia['madg'] ?></td>
                <td><?php echo $docgia['hovaten'] ?></td>
                <td><?php echo $docgia['gioitinh'] ?></td>
                <td><?php echo $docgia['namsinh'] ?></td>
                <td><?php echo $docgia['nghenghiep'] ?></td>
                <td><?php echo $docgia['ngaycapthe'] ?></td>
                <td><?php echo $docgia['ngayhethan'] ?></td>
                <td><?php echo $docgia['diachi'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url sửa, xóa
                    $urlEdit =
                        "index.php?controller=docgia&action=edit&madg=" . $docgia['madg'];
                    $urlDelete =
                        "index.php?controller=docgia&action=delete&madg=" . $docgia['madg'];
                    ?>
                    <a class="btn btn-primary" href="<?php echo $urlEdit?>">Sửa</a> &nbsp;
                    <a class="btn btn-warning" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
</div>