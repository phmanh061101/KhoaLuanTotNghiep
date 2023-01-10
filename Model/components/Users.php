<?php
    function checkuser($user,$pass){
        $sql="select * from taikhoan where TenDangNhap='".$user."' and MatKhau='".$pass."'";
        return getone($sql);
    }

    function adduser($user, $pass, $role, $phone, $name, $email){
        $sql="INSERT INTO taikhoan (TenDangNhap, MatKhau, Role, SDT, HoTen, Email) VALUES ('$user', '$pass', '$role', '$phone','$name', '$email')";
        return addsql($sql);
    }

    function updatepass($user,$pass){
        $sql="UPDATE taikhoan set MatKhau='".$pass."' where TenDangNhap='".$user."'";
        return execsql($sql,0);
    }
    
    function finduser($user){
        $sql="select * from taikhoan where TenDangNhap='".$user."'";
        return getone($sql);
    }

    function getPassHash($user){
        $sql="select MatKhau from taikhoan where TenDangNhap='".$user."'";
        return getone($sql);
    }

    function get_user_by_id($user_id) {
        $sql = "SELECT * FROM taikhoan WHERE MaTaiKhoan = $user_id";
        return getone($sql);
    }
    
    // function update_user_by_id($update_info, $user_id) {
    //     // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
    //     $address = $update_info['address'];
    //     $phone = $update_info['phone'];
    //     $email = $update_info['email'];
    //     $name = $update_info['name'];
    //     $dob = $update_info['dob'];
    //     $sql = "UPDATE taikhoan SET address = '$address', phone = '$phone', name = '$name', date = '$dob', email = '$email' WHERE id = $user_id";
    //     execsql($sql, 1);
    //     return true;
    // }
    function update_user_by_id($update_info, $user_id) {
        // được phép chỉnh sửa địa chỉ, sdt, họ tên, ngày sinh
        $address = $update_info['address'];
        $phone = $update_info['phone'];
        $email = $update_info['email'];
        $name = $update_info['name'];
        $dob = $update_info['dob'];
        $cccd = $update_info['cccd'];
        $sql = "UPDATE taikhoan SET DiaChi = '$address', SDT = '$phone', HoTen = '$name', NgaySinh = '$dob', Email = '$email', CCCD = '$cccd' WHERE MaTaiKhoan = $user_id";
        execsql($sql, 1);
        return true;
    }
    function add( $name,$address,$tang, $socamac,$socakhoi){
        $sql="INSERT INTO benhvien(TenBenhVien,DiaChi,TangSo,SoCaMac,SoCaKhoi)
         VALUES('$name','$address','$tang','$socamac','$socakhoi');";
         addsql($sql);
    }
    // function update($address, $socamac, $name,$socakhoi,$tang,$id)
    // {
    //     $sql="UPDATE benhvien 
    //     Set TenBenhVien ='$name',DiaChi='$address',TangSo='$tang',SoCaMac='$socamac',SoCaKhoi='$socakhoi', MaBenhVien=$id";
    //     updatesql($sql);
    // }
    function  add_benhnhan($user, $pass, $name, $date, $address, $phone, $cccd, $role, $email)
    {
        $sql="INSERT INTO taikhoan (TenDangNhap,MatKhau,HoTen,NgaySinh,SDT,Email,CCCD,DiaChi,Role)
         VALUES('$user','$pass','$name','$date','$phone','$email','$cccd','$address','$role');";
         addsql($sql);
    }
