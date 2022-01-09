<?php
require_once 'configs/database.php';
class Docgia
{
    public $madg;
    public $hovaten;

    public function insert($param = [])
    {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = " INSERT INTO DOCGIA (hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi) 
        VALUES ('{$param['hovaten']}','{$param['gioitinh']}','{$param['namsinh']}','{$param['nghenghiep']}','{$param['ngaycapthe']}','{$param['ngayhethan']}','{$param['diachi']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    public function getdocgiaBymadg($madg = null)
    {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM docgia WHERE madg=$madg";
        $results = mysqli_query($connection, $querySelect);
        $docgia = [];
        if (mysqli_num_rows($results) > 0) {
            $docgias = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $docgia = $docgias[0];
        }
        $this->closeDb($connection);

        return $docgia;
    }

    /**
     * Truy vấn lấy ra tất cả sách trong CSDL
     */
    public function index()
    {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM docgia";
        $results = mysqli_query($connection, $querySelect);
        $docgias = [];
        if (mysqli_num_rows($results) > 0) {
            $docgias = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $docgias;
    }

    public function update($docgia = [])
    {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE docgia 
    SET `hovaten` = '{$docgia['hovaten']}',
    `gioitinh` = '{$docgia['gioitinh']}',
    `namsinh` = '{$docgia['namsinh']}',
    `nghenghiep` = '{$docgia['ngaycapthe']}',
    `ngayhethan` = '{$docgia['ngayhethan']}',
    `diachi` = '{$docgia['diachi']}'
     WHERE `madg` = {$docgia['madg']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($madg = null)
    {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM docgia WHERE madg = $madg";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb()
    {
        $connection = mysqli_connect(
            DB_HOST,
            DB_USERNAME,
            DB_PASSWORD,
            DB_NAME
        );
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " . mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null)
    {
        mysqli_close($connection);
    }
}
