<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllUsers();
            require_once('view/index.php');
        }

        function details(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            if($data)
                header("location:index.php");
                else
                header("error.php");
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtmaNV'])){
                $maNV = $_POST['txtmaNV'];
                $hovaten = $_POST['txthovaten'];
                $chucvu = $_POST['txtchucvu'];
                $phongban = $_POST['txtphongban'];
                $luong = $_POST['txtluong'];
                $ngayvaolam = $_POST['txtngayvaolam'];
                $model = new model;
                $result = $model->addUsers($maNV, $hovaten, $chucvu, $phongban, $luong, $ngayvaolam);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtmaNV'])){
                $maNV = $_POST['txtmaNV'];
                $hovaten = $_POST['txthovaten'];
                $chucvu = $_POST['txtchucvu'];
                $phongban = $_POST['txtphongban'];
                $luong = $_POST['txtluong'];
                $ngayvaolam = $_POST['txtngayvaolam'];
                $model = new model;
                $result = $model->addUsers($maNV, $hovaten, $chucvu, $phongban, $luong, $ngayvaolam);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteUser($id);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>