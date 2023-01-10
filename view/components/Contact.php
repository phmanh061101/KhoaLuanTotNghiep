<div class="page-banner overlay-dark bg-image" style="background-image: url('../view/Assets/img/bg_image_1.jpg');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Yêu cầu tư vấn</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Yêu cầu tư vấn</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Tư vấn sức khỏe</h1>

      <form class="contact-form mt-5" method="POST">
        <div class="row mb-3">
          <!-- <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
          </div> -->

          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Câu hỏi mới</label>
            <textarea id="message" name="newmessage" class="form-control" rows="6" placeholder="Câu hỏi mới.."></textarea>
          </div>     
        </div>
        <input type="submit" class="btn btn-primary wow zoomIn" name="nut" id="nut" value="Để lại câu hỏi mới" />

<?php
$id=$_SESSION['id'];
//echo $id;
//lấy phường của tài khoản
$phuong=GetWard($id);
//echo $phuong['Phuong_BVCongTac'];


if(isset($_POST['nut'])){
   switch($_POST['nut'])
   {
     case 'Để lại câu hỏi mới':
      
      // echo $id;
      // echo'ok';
      if(isset($_POST['newmessage']) && $_POST['newmessage']=='')
      {
         echo'
        <h3 class="text-center wow fadeInUp" >Vui lòng nhập câu hỏi</h3>
      '; 
      }
      else{
        $cauhoi=$_POST['newmessage'];
        $id=$_SESSION['id'];
        // echo $cauhoi;
        // echo $id;
        // echo $phuong['Phuong_BVCongTac'];
        $themcauhoi=InsertQuestion($cauhoi, $id, $phuong['Phuong_BVCongTac']);

        echo'
        <h3 class="text-center wow fadeInUp" >Đã gửi câu hỏi</h3>
           '; 
      }

    }

}

?>

<hr>
<h4 style="text-align:center;">Các hỏi và trả lời</h4>
<?php
 //lấy câu hỏi và câu trả lời ra
   $id=$_SESSION['id'];
  // $show=QVA($id);
   
   $show=get_all_QVA($id);


// làm sao để lấy ra được nhiều hàng đề show       
 if(isset($show))
 {
   
 foreach ($show as $text)
 {

    echo'
        <div class="row mb-3"> ';
        echo'    <div class="col-6 py-2 wow fadeInUp">';
        echo'   <label for="message">Câu hỏi của bạn</label>';
        echo'   <textarea id="message" class="form-control bg-primary text-white" rows="2" placeholder="" readonly>';
                //<?php  
                //  if($show==0) 
                //   {echo'Chưa có câu hỏi';  }                                        
                //  else
                //  {           
                  echo $text['CauHoi'];
                 //}
                //có dấu đóng php
          echo' </textarea>';
          echo'
          </div>';
          echo'
          <div class="col-6 py-2 wow fadeInUp">';
          echo'    <label for="message">One Health - Medical Center</label>';
          echo'   <textarea id="message" class="form-control bg-primary text-white" rows="2" placeholder="" readonly>';
              //if($show==1)
             // {
                 echo $text['CauTraLoi'];
             // }
              
              // else
              //    { 
              //      echo'Chưa có câu trả lời'; 
              //    }     
              //có dấu đóng php
            echo'    
            </textarea>';
          echo'</div>';
      echo'  </div>';
      
        //<!-- <button type="submit" class="btn btn-primary wow zoomIn">Để lại câu hỏi</button> -->
  //    echo' </form>';
  //  echo' </div>';
  //  echo' </div>';
  //  echo'</div>'
  // ;
  // echo'</div>';
  // echo'</div>';
            } 
        }
?>
</form>
</div>
</div>

          <!-- </div> -->


  <div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div>
