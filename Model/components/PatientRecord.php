<?php
    function Search($timkiem){ 
        $query = "SELECT * from `hosobenhnhan` JOIN `taikhoan` WHERE hosobenhnhan.MaTaiKhoan = taikhoan.MaTaiKhoan AND hosobenhnhan.MaHoSo LIKE '$timkiem'";
        return getone($query);
    }
    function update_health($tinhtrang, $ghichu, $id){
        $sql = "UPDATE `hosobenhnhan` SET `TinhTrangSucKhoe` = '$tinhtrang', `GhiChu`='$ghichu' WHERE `hosobenhnhan`.`MaHoSo` = '$id'";
        
        execsql($sql, 1);
        return true;
    }
?>