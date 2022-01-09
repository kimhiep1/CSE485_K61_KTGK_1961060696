<?php include("template/header.php"); ?>
    <form method="post">
        <input type="text" placeholder="Mã nhân viên viên" name="txtmagv" value="<?php echo $data['maNV']; ?>"><br>
        <input type="text" placeholder="Họ và tên" name="txthovaten" value="<?php echo $data['hovaten']; ?>"><br>
        <input type="text" placeholder="Chức vụ" name="txtchucvu" value="<?php echo $data['chucvu']; ?>"><br>
        <input type="text" placeholder="Phòng ban" name="txtphongban" value="<?php echo $data['phongban']; ?>"><br>
        <input type="text" placeholder="Lương" name="txtluong" value="<?php echo $data['luong']; ?>"><br>
        <input type="text" placeholder="Ngày vào làm" name="txtngayvaolam" value="<?php echo $data['ngayvaolam']; ?>"><br>
        <button type="submit">Lưu</button>
    </form>
<?php include("template/footer.php"); ?>