<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Login</h1>
 
      <form class="contact-form mt-5" action="index.php?act=login" method="post">
        <div class="row mb-3">
          <div class="col-12 py-2 wow fadeInUp">
            <label for="user">email</label>
            <input type="text"  name='user' class="form-control" placeholder="Enter email" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="pass">Password</label>
            <input type="pass"  name='pass' class="form-control" placeholder="Enter password." required>
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-primary wow zoomIn">Login</button>
      </form>
      <?php
          if(isset($txt_err_lg)&&($txt_err_lg!="")){
              echo "<h3 style='color:red;'>".$txt_err_lg."</h3>";
          }
      ?>
    </div>
  </div>
