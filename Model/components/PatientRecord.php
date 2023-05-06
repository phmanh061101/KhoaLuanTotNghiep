<?php
    function Search($timkiem){ 
        $query = "SELECT * from `benhan` JOIN `taikhoan` WHERE benhan.HoTen = taikhoan.HoTen AND benhan.HoTen LIKE '$timkiem'";
        return getone($query);
    }
    function update_health($tinhtrang, $ghichu, $id){
        $sql = "UPDATE `hosobenhnhan` SET `TinhTrangSucKhoe` = '$tinhtrang', `GhiChu`='$ghichu' WHERE `hosobenhnhan`.`MaHoSo` = '$id'";
        
        execsql($sql, 1);
        return true;
    }
?>