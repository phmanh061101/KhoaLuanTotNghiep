<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
   
  <title>One Health - Medical Center</title>
<link rel="stylesheet" href="../view/Assets/css/maicons.css">
<link rel="stylesheet" href="../view/Assets/css/bootstrap.css">
<link rel="stylesheet" href="../view/Assets/vendor/owl-carousel/css/owl.carousel.css">
<link rel="stylesheet" href="../view/Assets/vendor/animate/animate.css">
<link rel="stylesheet" href="../view/Assets/css/theme.css">
<link rel="stylesheet" href="../view/Assets/css/Style.css">
</head>
<body>
<div class="back-to-top"></div>
<header>
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 text-sm">
          <div class="site-info">
            <a href="tel:+"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
            <span class="divider">|</span>
            <a href="mailto:thanhloctruong11022@gmail.com"><span class="mai-mail text-primary"></span>nhom6868@gmail.com</a>
          </div>
        </div>
        <div class="col-sm-4 text-right text-sm">
          <div class="social-mini-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-dribbble"></span></a>
            <a href="#"><span class="mai-logo-instagram"></span></a>
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .topbar -->

  <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Trang chủ</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?act=about">Về chúng tôi</a>
          </li> -->
          <li class="nav-item">
          <?php
            if(isset($_SESSION['id'])): 
            ?>
            <a class="nav-link" href="index.php?act=dangkydieutri">Đăng ký điều trị</a> <!--Register for treatment-->
            <?php 
            else:
              echo '<a class="nav-link" href="index.php?act=login">Đăng ký điều trị</a>';
            endif; 
            ?>
          </li>
          <li class="nav-item">
          <?php
            if(isset($_SESSION['id'])): 
            ?>
            <a class="nav-link" href="index.php?act=khaibaoyte">Khai báo y tế</a> <!--Health Declaration--> 
            <?php 
            else:
              echo '<a class="nav-link" href="index.php?act=login">Khai báo y tế</a>';
            endif; 
            ?>
          </li>
          <li class="nav-item">
          <?php
            if(isset($_SESSION['id'])): 
            ?>
            <a class="nav-link" href="index.php?act=giayxacnhan">In giấy xác nhận</a>
            <?php 
            else:
              echo '<a class="nav-link" href="index.php?act=login">In giấy xác nhận</a>';
            endif; 
            ?>
          </li>
          <?php
            if(isset($_SESSION['id'])): 
            ?>
            <a class="nav-link" href="index.php?act=edit_user">Cập nhật thông tin cá nhân</a>
            <?php 
            else:
              echo '<a class="nav-link" href="index.php?act=login">Cập nhật thông tin cá nhân</a>';
            endif; 
            ?>
          </li>
          <li class="nav-item">
            <?php
            if(isset($_SESSION['id'])):
              // {
              //  $id=$_SESSION['id'];
              //  echo $id;
              // }
             
            ?>
            <a class="nav-link" href="index.php?act=contact">Yêu cầu tư vấn</a>
            <?php 
            else:
              echo '<a class="nav-link" href="index.php?act=login">Yêu cầu tư vấn</a>';
            endif; 
            ?>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?act=new">Tin tức</a>
          </li>
          <li class="nav-item">
            <?php
            if(isset($_SESSION['id'])): 
            ?>
            <a class="btn btn-primary ml-lg-3" href="index.php?act=logout">Logout</a>
            <?php 
            else:
              echo '<a class="btn btn-primary ml-lg-3" href="index.php?act=login">Login</a>';
            endif; 
            ?>
          </li>
        </ul>
      </div> <!-- .navbar-collapse -->
    </div> <!-- .container -->
  </nav>
</header>
