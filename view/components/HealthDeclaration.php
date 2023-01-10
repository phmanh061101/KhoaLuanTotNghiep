<?php

    //  include "components/cCetification.php";
    //  $thongtin =  ControlSelectCertification(1) ;
     
    
?>
<form action="#" enctype="multipart/form-data" method="POST">
    <div class="KBYT">
        <div block-bind="content" id="content">
            <div class="container px-1">
                <div class="card p-sm-2 mt-2">
                    <div class="row ">
                        <div class="col-12 text-center text-uppercase mt-1">
                            <span>
                                <span class="text_donvi_ten">Thông tin khai báo y tế</span>
                            </span>
                        </div>
                        <div class="col-12 d-flex ">
                            <div class="custom-control custom-radio mt-2 mr-2">
                                <input name="loaiKhaiBao" type="radio" value="Bệnh nhân/Người nhà" />Bệnh nhân 
                                <input name="loaiKhaiBao" type="radio" value="Theo dõi sức khỏe tại nhà" />Bệnh nhân theo dõi sức khỏe tại nhà
                                khỏe tại nhà
                            </div>
                            
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-12 donvi_khaibao">
                            <div class="form-group">
                                <span class="text_donvi" id="ErNoiKhaiBao">Nơi khai báo</span><span class="text-danger" >(*)</span>:
                                <input type="text" name="NoiKhaiBao" class="form-control"
                                    placeholder="VD: 4, Nguyễn Văn Bảo, Phường 7, Gò Vấp "  require>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="form-group">
                                <span class="text_phone">Số điện thoại</span><span class="text-danger"> (*)</span>:
                                <input readonly type="text" name="sdt" class="form-control" >
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text_fullname">Họ và tên</span> <span class="text-danger">(*)</span>:
                                <input readonly type="text" name="hoten" class="form-control text-uppercase">
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="form-group">
                                <span class="text_fullname" id="BenhnenErr">Tiền sử bệnh nền</span> 
                                <input type="text" name="tiensubenh" class="form-control"
                                    placeholder="nhập lịch sử bệnh nền(viêm phổi, viêm phế quản....)" require>
                            </div>
                        </div>
                        <div class="col-12 wrap_trieuchung">
                            <div class="form-group">
                                <span class="text_note_1 text-primary font-weight-bold">Trong 14 ngày qua, Bạn có những
                                    triệu chứng nào</span><span class="text-danger"> (*)</span>:
                                <div class="table-responsive mt-1">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text_symptoms">Dấu hiệu</th>
                                                <th width="15%" class="text-center text_yes">Có</th>
                                                <th width="15%" class="text-center text_no">Không</th>
                                            </tr>
                                        </thead>

                                        <tr>
                                            <td>Sốt <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="sot" name="trieuchung_sot"
                                                    class="radio-trieuchung" value="Sốt ">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="sot" name="trieuchung_sot"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ho <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="ho" name="trieuchung_ho"
                                                    class="radio-trieuchung" value="Ho ">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="ho" name="trieuchung_ho"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Đau họng <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="dauhong" name="trieuchung_dauhong"
                                                    class="radio-trieuchung" value="Đau họng">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="dauhong" name="trieuchung_dauhong"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="matViGiac" name="trieuchung_matViGiac"
                                                    class="radio-trieuchung" value="Mất vị giác">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="matViGiac" name="trieuchung_matViGiac"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="met" name="trieuchung_met"
                                                    class="radio-trieuchung" value="Mệt">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="met" name="trieuchung_met"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Khó thở <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="khotho" name="trieuchung_khotho"
                                                    class="radio-trieuchung" value="Khó thở">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="khotho" name="trieuchung_khotho"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Triệu chứng/dấu hiệu khác <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="khac" name="trieuchung_khac"
                                                    class="radio-trieuchung" value="Triệu chứng khác">
                                            </td>
                                            <td class="text-center td-center">
                                                <input type="radio" id="khac" name="trieuchung_khac"
                                                    class="radio-trieuchung" value="" checked="">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="form-group xacnhan_dichte">
                                <span class="text_note_2 text-primary font-weight-bold">Trong vòng 14 ngày qua vừa qua,
                                    bạn có từng: </span><span class="text-danger">
                                    (*)</span>:
                                <div class="table-responsive mt-1">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th><span class="text_epidemiological_factors">Yếu tố dịch tễ</span>
                                                    <span class="text-danger">(*)</span>
                                                </th>
                                                <th width="15%" class="text-center text_yes">Có</th>
                                                <th width="15%" class="text-center text_no">Không</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-dichte">
                                            <tr>
                                                <td>1. Bạn có đang mắc COVID-19 không? <span
                                                        class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid"
                                                        class="radio-dichte" value="Đang mắc covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid"
                                                        value="" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày
                                                    qua <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan"
                                                        class="radio-dichte" value="Có tiếp xúc với ca nhiễm">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan"
                                                        value="" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua
                                                    <span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac"
                                                        class="radio-dichte" value="Đi tới vùng lãnh thổ khác">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac" value=""
                                                        class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không?
                                                    <span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="cachlyTapTrung" name="dichte_cachlyTapTrung"
                                                        class="radio-dichte" value="Cách ly tập trung">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="cachlyTapTrung" value=""
                                                        name="dichte_cachlyTapTrung" class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5. Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay
                                                    ho không? <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhieu" name="dichte_dauhieu"
                                                        class="radio-dichte" value="Có người thân bị covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dauhieu" name="dichte_dauhieu" value=""
                                                        class="radio-dichte" checked="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua
                                                    không? <span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dieuTri" name="dichte_dieuTri"
                                                        class="radio-dichte" value="Có điều trị covid">
                                                </td>
                                                <td class="text-center td-center">
                                                    <input type="radio" id="dieuTri" name="dichte_dieuTri"
                                                        class="radio-dichte" value="" checked="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <span class="col-12 text-center">*Mọi dữ liệu cung cấp đều được bảo mật, phục vụ cho việc điều trị
                        và phòng chống dịch.
                        Bấm “Gửi tờ khai” nếu như bạn đã hiểu và đồng ý.</span>

                </div>
            </div>
            <div class="row">
                <div class="col-12 my-3 text-center">
                    <div class="btn-group w-50"><button type="submit" name="btnsave"
                        class="btn btn-primary width-sm ml-1">Gửi</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php


?>
<?php

if (isset($_REQUEST['btnsave'])) {

    $trieuChung = $dichte = array();

    if (!empty($_REQUEST['trieuchung_sot'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_sot']);
    }
    if (!empty($_REQUEST['trieuchung_ho'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_ho']);
    }
    if (!empty($_REQUEST['trieuchung_dauhong'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_dauhong']);
    }
    if (!empty($_REQUEST['trieuchung_met'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_met']);
    }
    if (!empty($_REQUEST['trieuchung_khotho'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_khotho']);
    }
    if (!empty($_REQUEST['trieuchung_khac'])) {
        array_push($trieuChung, $_REQUEST['trieuchung_khac']);
    }

    if (!empty($_REQUEST['dichte_coMacCoVid'])) {
        array_push($dichte, $_REQUEST['dichte_coMacCoVid']);
    }
    if (!empty($_REQUEST['dichte_tiepXucGan'])) {
        array_push($dichte, $_REQUEST['dichte_tiepXucGan']);
    }
    if (!empty($_REQUEST['dichte_diNoiKhac'])) {
        array_push($dichte, $_REQUEST['dichte_diNoiKhac']);
    }
    if (!empty($_REQUEST['dichte_cachlyTapTrung'])) {
        array_push($dichte, $_REQUEST['dichte_cachlyTapTrung']);
    }
    if (!empty($_REQUEST['dichte_dauhieu'])) {
        array_push($dichte, $_REQUEST['dichte_dauhieu']);
    }
    if (!empty($_REQUEST['dichte_dieuTri'])) {
        array_push($dichte, $_REQUEST['dichte_dieuTri']);
    }

    $thongBaoLoi = array();

   
    if (isset($_REQUEST['loaiKhaiBao'])==null) {
        $thongBaoLoi['loaiKhaiBao']['sai'] = 'Loại khai báo không được rỗng';
        echo "<script>alert('" . $thongBaoLoi['loaiKhaiBao']['sai'] . "')</script>";}
    if (!preg_match('/^[0-9\/]{1,}+,+[A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}/', $_REQUEST['NoiKhaiBao'])) {
    $thongBaoLoi['NoiKhaiBao']['sai'] = 'Nơi khai báo có dạng SỐ nhà, đường, xã/phường, quận/huyện, tỉnh/thành phố';
    echo "<script>alert('" . $thongBaoLoi['NoiKhaiBao']['sai'] . "')</script>";}
   

    if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổ,ỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{0,}/', $_REQUEST['tiensubenh'])) {
    $thongBaoLoi['tiensubenh']['sai'] = 'Vui Lòng Nhập Địa Chỉ';
    echo "<script>alert('" . $thongBaoLoi['tiensubenh']['sai'] . "')</script>";}
    include "components/cHeathDeclaration.php";

    if(empty($thongBaoLoi)){
        $checkthanhcong = insertKhaiBaoYTe($_REQUEST['loaiKhaiBao'], $_REQUEST['NoiKhaiBao'],  $_REQUEST['tiensubenh'], implode(",", $trieuChung), implode(",", $dichte), $_SESSION['id']);
        
        if ($checkthanhcong == null) {
            echo "<script>alert('Khai Báo Thành Công')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?act=khaibaoyte'>";
        } else {
            echo "<script>alert('Khai Báo Thất Bại')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php?act=khaibaoyte'>";
        }
    }
    
}
?>
