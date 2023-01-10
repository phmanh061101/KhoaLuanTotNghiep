<?php
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
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'contact': 
                include '../view/components/Contact.php';
                break;
            case 'about': 
                include '../view/components/About.php';
                break;
            case 'new':
                include '../view/components/News.php';
                break;
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
                        if (md5($pass)==$pass_hash) {
                            $user1 = finduser($user);
                            $_SESSION['id'] = $user1['MaTaiKhoan'];
                            $_SESSION['user'] = $user1['TentaiKhoan'];
                            //Role 1 quản lí bệnh viện
                            if ($user1['Role'] == 1){
                                $_SESSION['hospitalAdmin'] = $user;
                                header('location: ../Screen/HospitalAdmin/index.php');
                            //Role 2 quản lí hệ thống
                            }else if ($user1['Role'] == 2){
                                $_SESSION['systemAdmin'] = $user;
                                header('location: ../Screen/SystemAdmin/index.php');
                                //Role 3 nhân viên bệnh viện
                            }else if ($user1['Role'] == 3){
                                $_SESSION['HospitalEmployee'] = $user;
                                header('location: ../Screen/HospitalEmployee/index.php');
                                //Role 4 
                            }else if ($user1['Role'] == 4){
                                $_SESSION['HospitalWardEmployee'] = $user;
                                header('location: ../Screen/HospitalWardEmployee/index.php');
                            }
                            else{
                                setcookie('user', $_SESSION['user'], time() + (86400 * 10), '/');
                                setcookie('id', $_SESSION['id'], time() + (86400 * 10), '/');
                                header('location: index.php');
                            }
                        }
                        else $txt_err_lg = "Sai mật khẩu!!!!!!";
                    }
                    else $txt_err_lg = "không có tài khoản trong database!";
                }
                include "../view/components/Login.php";
                break;
            // case 'user':
            //     $user = get_user_by_id($_SESSION['id']);
            //     $orders = get_limit_orders($_SESSION['id'], 5);
            //     include "../view/user.php";
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
            // case 'edit_user':
            //     // lấy thông tin user
            //     $user = get_user_by_id($_SESSION['id']);
            //     if(isset($_POST['btnUpdate'])) {
            //         // Đọc thông tin mới từ Form để update
            //         $user_id = $_SESSION['id'];
            //         $new_address = $_POST['address'];
            //         $new_email = $_POST['email'];
            //         $new_phone = $_POST['tel'];
            //         $new_date = $_POST['date'];
            //         $new_name = $_POST['name'];
            //         // update thông tin user
            //         $update_info = ['name'=>$new_name, 'address'=>$new_address, 'phone'=>$new_phone, 'dob'=>$new_date, 'email'=>$new_email];
            //         $result = update_user_by_id($update_info, $user_id);
            //         if ($result) {
            //             header('location: index.php?act=user'); 
            //         } 
            //         else {
            //             include "../view/edit_user.php";
            //         }
            //     }
            //     include "../view/edit_user.php";
            //     break;
            // case 'logout':
            //     if(isset($_SESSION['id'])) unset($_SESSION['id']);
            //     if(isset($_SESSION['user'])) unset($_SESSION['user']);
            //     setcookie('user', '', time() - 1, '/');
            //     setcookie('id', '', time() - 1, '/');
            //     header('location: index.php');
            //     break;
            case 'register':
                if (isset($_POST['register']) && ($_POST['register'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $rpass = $_POST['rpass'];
                    if ($pass != $rpass ||finduser($user) != NULL) {
                        # code...
                        if (finduser($user) != NULL) {
                            # code...
                                echo '<script>alert("Tên đăng nhập đã tồn tại vui lòng nhập lại!");</script>';
                                echo header("refresh:0; url='../Controller/index.php?act=register'");
                        }else {
                            # code...
                            echo '<script>alert("Mật khẩu không trùng khớp!");</script>';
                            echo header("refresh:0; url='../Controller/index.php?act=register'");
                        }
                    } else {
                        # code...
                            $pass_hash = md5($pass);
                            $role = 0;
                            $sdt = $_POST['sdt'];
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $id = adduser($user, $pass_hash, $role, $sdt, $name, $email);
                            echo '<script>alert("Đăng ký tài khoản thành công");</script>';
                            header('location: index.php?act=login');
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
    }else{
        include "../view/components/Home.php";
    }
    // include "../view/components/Home.php";
    include "../view/components/Footer.php";
?>

