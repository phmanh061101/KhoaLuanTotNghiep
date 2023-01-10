<?php
function ControlSelectCertification($MaTaiKhoan)
{
        include_once "../Model/components/mCetification.php";
       return modelSelectCertification($MaTaiKhoan) ;
        
}
