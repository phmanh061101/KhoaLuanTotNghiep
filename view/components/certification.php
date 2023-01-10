<?php
     include "components/cCetification.php";
     $layid=$_SESSION['id'];
    //  echo $layid;
    
     $thongtin =  ControlSelectCertification($layid) ;
   
    //  echo "<script>alert('Bệnh nhân cần khai báo y tế trước khi xuất giấy xác nhận')</script>";
    
    //  echo "<pre>";
    //     print_r($thongtin);
    //  echo "</pre>";
     
     if($thongtin["GhiChu"]== "Dương tính"){
        echo "<script>alert('Bệnh nhân chưa khỏi bệnh, không thể kết xuất giấy xác nhận')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
     }

     
    // if ($thongtin['MaToKhai']==null) {
    //     $thongtin['MaToKhai']['sai'] = 'Vui lòng khai báo y tế trước khi thực hiện chức năng';
    //     echo "<script>alert('" . $thongtin['MaToKhai']['sai'] . "')</script>";
    //     echo "<meta http-equiv='refresh' content='0;url=index.php'>";}
    // if ($thongtin['MaHoSo']==null) {
    //     $thongtin['MaHoSo']['sai'] = 'Bạn chưa được cập nhật vào hồ sơ bệnh nhân, không thực hiện được chức năng này';
    //     echo "<script>alert('" . $thongtin['MaHoSo']['sai'] . "')</script>";
    //     echo "<meta http-equiv='refresh' content='0;url=index.php'>";}


     if($thongtin["MaToKhai"]==null){
     echo "<script>alert('Vui lòng khai báo y tế trước khi thực hiện chức năng ')</script>";
     echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    
    }elseif($thongtin['MaHoSo']==null)
    {
       echo "<script>alert('Thông báo: Bạn chưa được cập nhật vào hồ sơ bệnh nhân, không thực hiện được chức năng này ')</script>";
       echo "<meta http-equiv='refresh' content='0;url=index.php'>";
    }

     
?>
    <div class="GXN">
        <div class="content-page px-0">
            <div class="container px-1">
                <div class="card p-sm-2" style="margin-bottom:50px ;">
                    <div class="row " style="margin-top:50px ;">

                        <div class="col-6 text-center text-uppercase mt-1">
                            <span>Sở y tế TP Hồ CHí Minh <br> TTYT quận gò vấp <br></span>
                        </div>
                        <div class="col-6 text-center  mt-1">
                            <span>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM <br> Độc lập - Tự do - Hạnh Phúc</span>
                        </div>
                        <div class="col-12 text-center text-uppercase mt-1">
                            <span> <br> <br> Giấy xác nhận tình trạng khỏi bệnh covid</span>
                        </div>
                    </div>
                    <br>
                    <div class="row col-12 mt-1 ml-5" >
                        <div class="col-5 font-weight-bold mt-1 ">Họ tên:</div>
                        <!-- <div class="col-7 hoten mt-1"> </div> -->
                        <div class="col-7 hoten mt-1"> <?php echo $thongtin ['HoTen']; ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Số điện thoại: </div>
                        <div class="col-7 sdt mt-1"><?= $thongtin  ['SDT'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Địa chỉ: </div>
                        <div class="col-7 diachi mt-1"><?= $thongtin  ['DiaChi'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 " > Email: </div>
                        <div class="col-7 email mt-1"><?= $thongtin  ['Email'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 " >Năm sinh:</div>
                        <div class="col-7 ngaysinh mt-1" ><?= $thongtin  ['NgaySinh'] ?></div>

                        <div class="col-5 font-weight-bold mt-1 ">CCCD: </div>
                        <div class="col-7 cccd mt-1"><?= $thongtin  ['CCCD'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày khai báo:</div>
                        <div class="col-7 ngaykhaibao mt-1"><?= $thongtin  ['Ngaykhaibao'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Chuẩn đoán: </div>
                        <div class="col-7  mt-1"> Dương tính với Covid-19</div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày nhập viện:</div>
                        <div class="col-7 ngaynhapvien mt-1" > <?= $thongtin  ['NgayNhapvien'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Ngày khỏi bệnh:</div>
                        <div class="col-7 ngaykhoibenh mt-1" > <?= $thongtin  ['NgayKhoiBenh'] ?> </div>

                        <div class="col-5 font-weight-bold mt-1 " >Kết luận: </div>
                        <div class="col-7 ngaykhoibenh mt-1" > Bệnh nhân đủ điều kiện hoàn thành cách ly và khỏi bệnh  </div>
                        
                        <div class="col-5 font-weight-bold mt-1 " >Yêu cầu:</div>
                        <div class="col-7 ngaykhoibenh mt-1 mb-5" >Bệnh nhân theo dõi sức khỏe 7 ngày và thực hiện 5K theo quy định của Bộ Y tế </div>
                        
                    </div>
                    <div class="col-12 text-right  mt-1" style="padding-bottom:200px ;" >
                            <!-- <span >Ngày.....Tháng.....Năm..... </span> <br> -->
                            <span style="padding-right:200px ;">NHÂN VIÊN Y TẾ</span>  <br>
                            <Span style="padding-right: 190px;">(Ký và ghi rõ họ tên) </Span>
                    </div>

                </div>
            </div>
        </div>
    </div>

