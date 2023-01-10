<!-- <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Đăng ký</h1>
      <form class="contact-form mt-5" action="index.php?act=register" method="post">
        <div class="row mb-3">
          <div class="col-12 py-2 wow fadeInUp">
            <label for="user">Tên đăng nhập</label>
            <input type="text"  name='user' class="form-control" placeholder="Nhập tên của bạn" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="pass">Password</label>
            <input type="password"  name='pass' class="form-control" placeholder="Enter password." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="rpass">Nhập lại Password</label>
            <input type="password"  name='rpass' class="form-control" placeholder="Nhập lại password." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="name">Họ tên</label>
            <input type="text"  name='name' class="form-control" placeholder="Nhập Họ tên của bạn" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="sdt">SDT</label>
            <input type="text"  name='sdt' class="form-control" placeholder="Nhập số điện thoại" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="email">Email</label>
            <input type="email"  name='email' class="form-control" placeholder="Nhập email" required>
          </div>
        </div>
        <input class="btn btn-primary wow zoomIn" type="submit" name="register" value="Đăng Ký">
      </form>
      Bạn đã có tài khoản? <a href="index.php?act=login">Đăng nhập</a>
    </div>
  </div> -->

<section class="page-section">
  <!--Bắt Đầu Phần Hình Ảnh-->
  <div class="img-bg">
    <img src="../view/Assets/img/bg.jpg" alt="Hình Ảnh Minh Họa">
    <!-- <img src="https://niemvuilaptrinh.ams3.cdn.digitaloceanspaces.com/tao_trang_dang_nhap/hinh_anh_minh_hoa.jpg" alt="Hình Ảnh Minh Họa"> -->
  </div>
  <!--Kết Thúc Phần Hình Ảnh-->
  <!--Bắt Đầu Phần Nội Dung-->
  <div class="noi-dung">
    <div class="form">
      <h2>Trang Đăng Ký</h2>
      <form action="index.php?act=register" method="post">
        <div class="input-form">
          <span>Tên tài khoản</span>
          <input type="text" name='user' class="form-control" placeholder="Nhập tên của bạn" required>
        </div>
        <div class="input-form">
          <span>Mật Khẩu</span>
          <input type="password" name='pass' class="form-control" placeholder="Nhập mật khẩu" required>
        </div>
        <div class="input-form">
          <span>Nhập lại mật Khẩu</span>
          <input type="password" name='rpass' class="form-control" placeholder="Nhập lại mật khẩu." required>
        </div>
        <div class="input-form">
          <span>Họ tên</span>
          <input type="text" name='name' class="form-control" placeholder="Nhập Họ tên của bạn" required>
        </div>
        <div class="input-form">
          <span>SDT</span>
          <input type="text" name='sdt' class="form-control" placeholder="Nhập số điện thoại" required>
        </div>
        <div class="input-form">
          <span>Email</span>
          <input type="email" name='email' class="form-control" placeholder="Nhập email" required>
        </div>
        <!-- <div class="input-form">
              <span>Ngày sinh</span>
              <input type="date" name='date' class="form-control" required>
            </div> -->
        <div class="input-form">
          <!-- <input type="submit" value="Đăng Nhập"> -->
          <input class="btn btn-primary wow zoomIn" type="submit" name="register" value="Đăng Ký">
        </div>
        <div class="input-form">
          <p>Bạn Đã Có Tài Khoản? <a href="index.php?act=login">Đăng nhập</a></p>
        </div>
      </form>

    </div>
  </div>
  <!--Kết Thúc Phần Nội Dung-->
</section>