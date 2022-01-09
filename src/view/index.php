<?php include("template/header.php"); ?>
    <div>
        <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
    </div>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Nhân viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Chức vụ</th>
                    <th scope="col">Phòng ban</th>
                    <th scope="col">Lương</th>
                    <th scope="col">Ngày vào làm</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                    <th scope="row"><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['maNV']; ?></a></th>
                    <td><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['hovaten']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['chucvu']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['phongban']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['luong']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['maNV']; ?>"><?php echo $data['ngayvaolam']; ?></a></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['maNV']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['maNV']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
<?php include("template/footer.php"); ?>