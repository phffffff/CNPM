<!DOCTYPE html>
<html>
<body>

<?php
echo "Ngày: date('Y-m-d')";
echo "<br>Giờ: date('h:i:sa')<br>";
echo "vd: ".date("h:i:sa");
echo "<br><br>";
echo "Hôm nay<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br><br>";


echo "Ngày mai<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "Hôm qua<br>";
$d=strtotime("yesterday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "2 hôm trước<br>";
$d=strtotime("-2 day");
echo date("Y-m-d", $d) . "<br>";

echo "<br>Tuần sau<br>";
$d=strtotime("+1 week");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br> 3 tháng sau<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

echo "<br>Ví dụ <br>";
echo time();

echo "<br>";
echo date("d", strtotime("-2 day")) - date("d");

echo "<br><br>";


?>
<!--
<form action="vd.php" method="POST">
<input type='text' name='ngay_gui' value='<?php echo time(); ?>'>
<input type="submit" name="">
</form>
-->
<form action="vd.php" method="POST">
<input type='date' name='ngay_gui'>
<input type="submit" name="">
</form>

<?php 
 $giatri = filter_input(INPUT_POST, 'ngay_gui');
 $gg = date_create("$giatri");
 $ngay = date_format($gg, 'm');
 echo $ngay;
?>



</body>
</html>

<!--



   <div class="col-sm-4">
          <div class="div1">
            Doanh thu Hôm nay<br>
            - Có <?php $dem1 = 0; $tongthu1=0; foreach ($thongke_hoadon_ngay as $key => $value) { 
              $dem1++; 
              $tongthu1 += $value['tongtien'];
              } ?>
            <span style="color: orange"><?php echo $dem1;?></span> hóa đơn<br>
            - Tổng thu<span style="color: orange"> <?php echo $tongthu1.'.000 VND'; ?> </span>          
          
          </div>
     </div>




     
	<form action="?action=trangchu" method="POST">
            Doanh thu 
            <select name="ngay" style="font-size: 15px;">
              <option value="<?php echo date("Y-m-d");?>">Hôm nay</option>
              <option value="<?php echo date("Y-m-d", strtotime("-2 day"));?>">
                <?php echo date("d", strtotime("-2 day")); ?>
              </option>
               <option value="<?php echo date("Y-m-d", strtotime("-3 day"));?>">
                <?php echo date("d", strtotime("-3 day")); ?>
              </option>
               <option value="<?php echo date("Y-m-d", strtotime("-4 day"));?>">
                <?php echo date("d", strtotime("-4 day")); ?>
              </option>
               <option value="<?php echo date("Y-m-d", strtotime("-5 day"));?>">
                <?php echo date("d", strtotime("-5 day")); ?>
              </option>
               <option value="<?php echo date("Y-m-d", strtotime("-6 day"));?>">
                <?php echo date("d", strtotime("-6 day")); ?>
              </option>
              <option value="<?php echo date("Y-m-d", strtotime("-7 day"));?>">
                <?php echo date("d", strtotime("-7 day")); ?>
              </option>
            </select>
            <button type="submit" style="font-size: 15px;">Gửi</button>          
        </form>  
        -->