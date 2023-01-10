<?php
function insertKhaiBaoYTe( $loaiKhaiBao,$noiKhaiBao,  $tienSuBenh, $trieuChung, $dichTe, $taiKhoan)
{
        include_once "../Model/components/MedicalDeclaration.php";
        modelInsertKhaiBaoYTe($loaiKhaiBao,$noiKhaiBao, $tienSuBenh, $trieuChung, $dichTe, $taiKhoan);
}
