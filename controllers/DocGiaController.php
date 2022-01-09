<?php
require_once 'models/Docgia.php';
class DocGiaController {
    /**
     * Liệt kê các sách đang có trên hệ thống
     */
    public function index() {
        $docgia = new Docgia();
        $cacdocgia = $docgia->index();

        require_once 'views/docgia/index.php';
    }

    public function add() {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngaycapthe'];
            $diachi = $_POST['diachi'];
            //xử lý valmadgate, nếu mà để trống tên sách
//            thì báo lỗi và không cho submit form
            if (empty($hovaten)) {
                $error = "hovaten không được để trống";
            }
            else {
                //gọi model để insert dữ liệu vào database
                $docgia = new Docgia();
                //gọi phương thức để insert dữ liệu
                //nên tạo 1 mảng tạm để lưu thông tin của
//                đối tượng dựa theo cấu trúc bảng
                $docgiaArr = [
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi
                ];
                $isInsert = $docgia->insert($docgiaArr);
                // var_dump($isInsert);exit;
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    header("Location: error.php");
                    exit();
                }
                header("Location: index.php?controller=docgia&action=index");
                exit();
            }
        }
        //gọi view
        require_once 'views/docgia/add.php';
    }

    public function edit() {
        //lấy ra thông tin sách dựa theo madg đã gắn trên url
        //xử lý valmadgate cho trường hợp madg truyền lên không hợp lệ
        if (!isset($_GET['madg'])) {
            header("Location: error.php");
            exit();
        }
        if (!is_numeric($_GET['madg'])) {
            header("Location: error.php");
        exit();
        }
        $madg = $_GET['madg'];
        //gọi model để lấy ra đối tượng sách theo madg
        $docgiaModel = new Docgia();
        $docgia = $docgiaModel->getdocgiaBymadg($madg);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngaycapthe'];
            $diachi = $_POST['diachi'];
            //check valmadgate dữ liệu
            if (empty($hovaten)) {
                $error = "hovaten không được để trống";
            }
            else {
                //xử lý update dữ liệu vào hệ thống
                $docgiaModel = new Docgia();
                $docgiaArr = [
                    'madg' => $madg,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi
                ];
                // var_dump($docgiaModel->update($docgiaArr));exit;
                $isUpdate = $docgiaModel->update($docgiaArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$madg thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$madg thất bại";
                }
                header("Location: index.php?controller=docgia&action=index");
                exit();
            }
        }
        //truyền ra view
        require_once 'views/docgia/edit.php';
    }

    public function delete() {
        //url trên trình dueyjet sẽ có dạng
//        ?controller=book&action=delete&madg=1
        //bắt madg từ trình duyêtj
        $madg = $_GET['madg'];
        if (!is_numeric($madg)) {
            header("Location: index.php?controller=docgia&action=index");
            exit();
        }

        $docgia = new Docgia();
        $isDelete = $docgia->delete($madg);

        if ($isDelete) {
            header("Location: index.php?controller=docgia&action=index");
        exit();
        }
        else {
            header("Location: error.php");
        exit();
        }

        header("Location: index.php?controller=docgia&action=index");
        exit();


    }
}