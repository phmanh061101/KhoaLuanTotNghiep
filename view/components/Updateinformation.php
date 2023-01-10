<center>
<div class="capnhat" style="padding: 10px;">
    <span><h4>CẬP NHẬT THÔNG TIN CÁ NHÂN</h4></span>
    <form action="" method="POST">
        <table>
            <!-- <tr>
                <td>Mã hồ sơ:</td>
                <td><input type="text" class="form-control" name="mhs" style="width:300px" value="<?php //echo $MHS ?>" readonly></td>
            </tr> -->
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" class="form-control" name="name" style="width:300px" value="<?php echo $HoTen?>" required></td>
            </tr>
            <tr>
                <td>Ngày sinh:</td>
                <td><input type="date" class="form-control" name="date" style="width:300px" value="<?php echo $NgaySinh?>" required></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="text" class="form-control" name="tel" style="width:300px" value="<?php echo $SDT?>" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" class="form-control"name="email" style="width:300px" value="<?php echo $Mail?>" required></td>
            </tr>
            <tr>
                <td>CMND/CCCD:</td>
                <td><input type="text" class="form-control" name="cccd" style="width:300px" value="<?php echo $CCCD?>" required></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" class="form-control" name="address" style="width:300px" value="<?php echo $DiaChi?>" required></td>
            </tr>
        </table></br>
        <input type="submit" value="Cập nhật"  name="btnUpdate" class="btn btn-primary">
    </form>
</div>
</center>