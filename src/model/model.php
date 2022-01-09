<?php
    require_once 'config/db.php';
    class model{
        private $maNV, $hovaten,$chucvu, $phongban,$luong, $ngayvaolam;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM nhanvien";
            $result = mysqli_query($conn,$sql);
            $datas = [];
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            $this->closeDb($conn);

            return $arr_users;
        }
        public function addUsers($maNV, $hovaten, $chucvu, $phongban,$luong, $ngayvaolam){
            $conn = $this->connectDb();
            $sql = "INSERT INTO nhanvien(maNV, hovaten, chucvu, phongban, luong, ngayvaolam) VALUES ('$maNV', '$hovaten', '$chucvu', '$phongban', '$luong','$ngayvaolam')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
        public function getUser($id){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM nhanvien WHERE maNV = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function updateUser($maNV, $hovaten,$chucvu, $phongban,$luong, $ngayvaolam){
            $conn = $this->connectDb();
            $sql = "UPDATE nhanvien SET maNV='$maNV', hovaten='$hovaten' WHERE bd_id = '$id';
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }

        public function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM nhanvien WHERE maNV = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

    }
?>