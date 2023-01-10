<?php
ob_start();
session_start();

// cookies
// if(count($_COOKIE) > 1) {
//     setcookie('user', $_COOKIE['user'], time() + (86400 * 10), '/');
//     setcookie('id', $_COOKIE['id'], time() + (86400 * 10), '/');
//     $_SESSION['id'] = $_COOKIE['id'];
//     $_SESSION['user'] = $_COOKIE['user'];
// };
include "../Model/index.php";
include "../view/components/Header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'contact':
            include '../view/components/Contact.php';
            break;
        case 'about':
            include '../view/components/About.php';
            break;
        case 'khaibaoyte':
            include "../view/components/HealthDeclaration.php";
            break;
        case 'new':
            include '../view/components/News.php';
            break;
        case 'giayxacnhan':
            include "../view/components/certification.php";
            break;
            // case 'updatethongtin':
            //     $get = get_user_by_id($_SESSION['id']);

            //     include "../view/components/Updateinformation.php";
            //     break;
        case 'dangkydieutri':
            $RegisterForTreatment = get_csyt();
            if (isset($_POST['txtcoso'])) {
                $print = thongtin($_POST['txtcoso']);
            }
            if (isset($_POST['guiyeucau']) && $_POST['guiyeucau']) {
                $mahs = $_POST['hosobn'];
                $ngayyeucau = $_POST['txtdate'];
                $tinhtrangsuckhoe = $_POST['txttinhtrang'];
                $mcsyt = $_POST['txtcoso'];
                $thongbaoloi = array();
                if (!preg_match('/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổ,ỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{0,}$/', $_POST['txttinhtrang'])) {
                    $thongbaoloi['txttinhtrang']['sai'] = 'Không được nhập số';
                    echo "<script>alert('" . $thongbaloi['txttinhtrang']['sai'] . "')</script>";
                    header('refresh:0; url="index.php?act=dangkydieutri"');
                    break;
                }
                try {
                    $sql = add_dangkydieutri($tinhtrangsuckhoe, $ngayyeucau, $mahs, $mcsyt);
                    $conn = connect();
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                } catch (PDOException $e) {
                    echo $sql . "</br>" . $e->getMessage();
                }
                $conn = null;
                echo '<script>alert("Gửi thành công")</script>';
                header('refresh:0; url="index.php?act=dangkydieutri"');
                // include '../view/components/RegisterForTreatment.php';
                // break;
            }
            include "../view/components/RegisterForTreatment.php";
            break;
            // case 'doctors':
            //     include '../view/components/Doctors.php';
            //     break;
            // case 'search':
            //     if(isset($_POST['keyword']) && ($_POST['keyword']!='')){
            //         $listsearch = showsearch($_POST['keyword']);
            //         include '../view/search.php';
            //     }
            //     break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $user = $_POST["user"];
                $pass = $_POST['pass'];
                if (finduser($user) != NULL) {
                    $pass_hash = getPassHash($user)['MatKhau'];
                    if (md5($pass) == $pass_hash) {
                        $user1 = finduser($user);
                        $_SESSION['id'] = $user1['MaTaiKhoan'];
                        $_SESSION['user'] = $user1['TenDangNhap'];
                        //Role 1 quản lí bệnh viện
                        if ($user1['Role'] == 1) {
                            $_SESSION['hospitalAdmin'] = $user;
                            header('location: ../Screen/HospitalAdmin/index.php');
                            //Role 2 quản lí hệ thống
                        } else if ($user1['Role'] == 2) {
                            $_SESSION['systemAdmin'] = $user;
                            header('location: ../Screen/SystemAdmin/index.php');
                            //Role 3 nhân viên bệnh viện
                        } else if ($user1['Role'] == 3) {
                            $_SESSION['HospitalEmployee'] = $user;
                            header('location: ../Screen/HospitalEmployee/index.php');
                            //Role 4 
                        } else if ($user1['Role'] == 4) {
                            $_SESSION['HospitalWardEmployee'] = $user;
                            header('location: ../Screen/HospitalWardEmployee/index.php');
                        } else {
                            setcookie('user', $_SESSION['user'], time() + (86400 * 10), '/');
                            setcookie('id', $_SESSION['id'], time() + (86400 * 10), '/');
                            header('location: index.php');
                        }
                    } else echo '<script>alert("Nhập sai mật khẩu")</script>';
                } else echo '<script>alert("Không có tài khoản trong database")</script>';
            }
            include "../view/components/Login.php";
            break;
            // case 'user':
            //     $user = get_user_by_id($_SESSION['id']);
            //     $orders = get_limit_orders($_SESSION['id'], 5);
            //     include "./view/components/Updateinformation.php";
            //     break;
            // case 'edit_pass':
            //     if (isset($_POST['submit']) && ($_POST['submit'])) {
            //         $user = $_SESSION['user'];
            //         $pass = $_POST['password'];
            //         $newpass = $_POST['newpass'];
            //         $pass_hash = password_hash($newpass, PASSWORD_BCRYPT);
            //         updatepass($user, $pass_hash);
            //         header('location: index.php?act=user');
            //     }
            //     include "../view/edit_pass.php";
            //     break;
        case 'edit_user':
            // lấy thông tin user
            $user = get_user_by_id($_SESSION['id']);
            $HoTen = $user["HoTen"];
            $DiaChi = $user['DiaChi'];
            $NgaySinh = $user["NgaySinh"];
            $SDT = $user["SDT"];
            $Mail = $user["Email"];
            $CCCD = $user["CCCD"];
            if (isset($_POST['btnUpdate'])) {
                // Đọc thông tin mới từ Form để update
                $user_id = $_SESSION['id'];
                echo $user_id;
                $new_address = $_POST['address'];
                $new_email = $_POST['email'];
                $new_phone = $_POST['tel'];
                $new_date = $_POST['date'];
                $new_name = $_POST['name'];
                $new_cccd = $_POST['cccd'];
                // update thông tin user
                if(!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{1,}$/",$new_name)){
                    echo "<script>alert('Nhập sai tên')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0][3|7|9][0-9]{8}$/",$new_phone)){
                    echo "<script>alert('Nhập sai số điện thoại')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0][0-9]{11}$/",$new_cccd)){
                    echo "<script>alert('Nhập sai CCCD')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[a-zA-Z0-9]{0,50}[@][a-z]{3,7}[.][a-z]{3}$/",$new_email)){
                    echo "<script>alert('Nhập sai email')</script>";
                    echo header('refresh:0');
                    break;
                }
                if(!preg_match("/^[0-9\/]{1,}+,+[0-9A-Za-z.ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s,]{2,}$/",$new_address)){
                    echo "<script>alert('Nhập sai địa chỉ')</script>";
                    echo header('refresh:0');
                    break;
                }
                $date=getdate();
                $day = $date['mday'];
                $month = $date['mon'];
                $year = $date['year'];
                $time="$year-$month-$day";
                if(strtotime($new_date)>strtotime($time)){
                    echo "<script>alert('Nhập sai ngày')</script>";
                    echo header('refresh:0');
                    break;
                }
                $update_info = ['name' => $new_name, 'address' => $new_address, 'phone' => $new_phone, 'dob' => $new_date, 'email' => $new_email, 'cccd' => $new_cccd];
                $result = update_user_by_id($update_info, $user_id);
                if ($result) {
                    echo "<script>alert('Cập nhật thông tin thành công')</script>";
                    header('refresh:0; url ="index.php?act=edit_user"');
                } else {
                    include "../view/components/Updateinformation.php";
                }
            }
            include "../view/components/Updateinformation.php";
            break;
        case 'logout':
            if (isset($_SESSION['id'])) unset($_SESSION['id']);
            if (isset($_SESSION['user'])) unset($_SESSION['user']);
            // setcookie('user', '', time() - 1, '/');
            // setcookie('id', '', time() - 1, '/');
            // include "../view/components/Home.php";
            header('location: index.php');
            // include "../index.php";
            break;
        case 'register':
            if (isset($_POST['register']) && ($_POST['register'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $rpass = $_POST['rpass'];
                $name = $_POST['name'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                if ($pass != $rpass || finduser($user) != NULL) {
                    # code...
                    if (finduser($user) != NULL) {
                        # code...
                        echo header("refresh:0; url='../Controller/index.php?act=register'");
                        echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                    } else {
                        # code...
                        echo header("refresh:0; url='../Controller/index.php?act=register'");
                        echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                    }
                } elseif (!preg_match("/^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđA-ZỲỌÁẦẢẤỜỄÀẠẰỆẾÝỘẬỐŨỨĨÕÚỮỊỖÌỀỂẨỚẶÒÙỒỢÃỤỦÍỸẮẪỰỈỎỪỶỞÓÉỬỴẲẸÈẼỔẴẺỠƠÔƯĂÊÂĐ0-9]+){1,})$/", $name)) {
                    # code...
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Họ tên không hợp lệ");</script>';
                } elseif (!preg_match("/^(?=.*[a-z])(?=.*\d)[a-zA-Z\d]{8,}$/", $pass)) {
                    # code...
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Mật khẩu tối thiểu 8 ký tự và ít nhất 1 số");</script>';
                } elseif (!preg_match("/^(0[3|5|7|8|9][0-9]{8})$/", $sdt)) {
                    # code...
                    echo '<script>alert("Số điện thoại không chính xác!!");</script>';
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                } elseif (!preg_match("/^[a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,3}$/", $email)) {
                    echo header("refresh:0; url='../Controller/index.php?act=register'");
                    echo '<script>alert("Email không hợp lệ");</script>';
                } else {
                    # code...
                    $pass_hash = md5($pass);
                    $role = 0;
                    $id = adduser($user, $pass_hash, $role, $sdt, $name, $email);
                    echo header("refresh:0; url='../Controller/index.php?act=login'");
                    echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                }
                // if (finduser($user) == NULL) {
                //     $pass_hash = md5($pass);
                //     $role = 0;
                //     $sdt = $_POST['sdt'];
                //     $email = $_POST['email'];
                //     $id = adduser($user, $pass_hash, $role, $sdt, $email);
                //     header('location: index.php?act=login');
                // }
                // elseif ($pass != $rpass) {
                //     # code...
                //     echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                //     echo header("refresh:0; url='../Controller/index.php?act=register'");
                // }
                // else {
                //     echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                //     echo header("refresh:0; url='../Controller/index.php?act=register'");
                // }
            }
            include "../view/components/Register.php";
            break;
        default:
            include "../view/components/Home.php";
    }
} else {
    include "../view/components/Home.php";
}
// include "../view/components/Home.php";
include "../view/components/Footer.php";
