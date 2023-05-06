<!-- <div>Đăng ký điều trị</div> -->
<style>
    .b123 {
        margin: 20px;
    }

    .tokhai {
        margin-bottom: 10px;
    }
</style>
<?php
$idtaikhoan = $_SESSION['id'];
// echo $idtaikhoan;

$goiham = laytk($idtaikhoan);

$mahoso1 = $goiham['MaHoSo'];
// echo $mahoso1;
?>
<div></div>
    <form action="index.php?act=dangkydieutri" method="POST">

        <div class="row justify-content-center">
            <h4 class="b123 text-center"><b>Đăng ký điều trị</b></h4>
        </div>
            <input type="text" class="form-control col-md-7" name="txttaikhoan" value="<?= $hoso['MaTaiKhoan']?>" hidden>
        <div class="tokhai row">
            <label for="txtcoso" class="col-md-4 text-center">Tên cơ sở y tế:</label>
            <select name="txtcoso" class="form-control col-md-7" id="mySelect" onchange="myFunction()">
            <option value="">---</option>
            <?php
                foreach($RegisterForTreatment as $tencsyt)
                {
                echo "<option value='".$tencsyt["MaCSYT"]."'>".$tencsyt["TenCSYT"]."</option>";
                }
            ?>
            </select>
        </div>
        <div class="tokhai row">
            <label for="txttt" class="col-md-4 text-center">Mã cơ sở y tế:</label>
            <p id="demo" class="form-control col-md-7"></p>
            <script>
                function myFunction() {
                var x = document.getElementById("mySelect").value;
                document.getElementById("demo").innerHTML = "" + x;
                }
            </script>
        </div>
            <!-- <input type="text" class="form-control col-md-7" name="txttaikhoan" value="" hidden> -->
        <div class="tokhai row">
            <label for="hosobn" class="col-md-4 text-center">Mã hồ sơ:</label>
            <input type="text" class="form-control col-md-7" name="hosobn" value="<?php echo $mahoso1;?>">
        </div>
        <div class="tokhai row">
            <label for="txttinhtrang" class="col-md-4 text-center">Tình trạng bệnh:</label>
            <input type="text" class="form-control col-md-7" name="txttinhtrang" value="<?php echo $goiham['TinhTrangSucKhoe'];  ?>" required>
           
        </div>
        
        <div class="tokhai row">
            <label for="txtdate" class="col-md-4 text-center">Ngày yêu cầu:</label>
            <input type="text" class="form-control col-md-7" name="txtdate" value="<?php $time=getdate(); echo $time['year']."-".$time['mon']."-".$time['mday'];?>" readonly>
        </div>
        
        <div class="tokhai row d-flex justify-content-center pr-2 border-bottom">
            <input type="submit" class="btn btn-primary" name="guiyeucau" value="Gửi yêu cầu">
        </div>
    </form>
</div>