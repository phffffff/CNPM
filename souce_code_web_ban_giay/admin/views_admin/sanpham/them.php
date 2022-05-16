<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

  
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">

        <form action="?action=them_sanpham" method="POST" enctype="multipart/form-data">
      	<table border="0" cellpadding="10" >
          <tr>
               <td>idLoaiSP:</td>
                <td>
                   <select name="idLoaiSP">
                     <?php foreach ($data_lsp as $value) {?>
                       <?php echo "<option value='".$value['idLoaiSP']."'>".$value['tenLSP']."</option>"; ?>
                     <?php } ?>
                 </select>
              </td>
           </tr>
            <tr>
               <td>Loại Khuyến mãi:</td>
               <td>
                   <select name="idKM">
                     <?php foreach ($data_km as $value) {?>
                       <?php echo "<option value='".$value['idKM']."'>".$value['loaiKM']."</option>"; ?>
                     <?php } ?>
                 </select>
              </td>
           </tr>
            <tr>
               <td>id màu:</td>
               <td>
                   <select name="idmau">
                     <?php foreach ($data_mau as $value) {?>
                       <?php echo "<option value='".$value['idcolor']."'>".$value['color']."</option>"; ?>
                     <?php } ?>
                 </select>
              </td>
           </tr>
            <tr>
               <td>id size:</td>
               <td>
                   <select name="idsize">
                     <?php foreach ($data_size as $value) {?>
                       <?php echo "<option value='".$value['idsize']."'>".$value['size']."</option>"; ?>
                     <?php } ?>
                 </select>
              </td>
           </tr>
            <tr>
               <td>Tên Sản Phẩm:</td>
               <td><input type="text" value="" name="tenSP" required></td>
           </tr>
            <tr>
               <td>Đơn giá:</td>
               <td><input type="text" value="" name="Dongia" required></td>
           </tr>
            <tr>
               <td>ảnh 1:</td>
               <td><input type="file" value="" name="anh1" required></td>
           </tr>
           <tr>
               <td>ảnh 2:</td>
               <td><input type="file" value="" name="anh2" required></td>
           </tr>
            <tr>
               <td>ảnh 3:</td>
               <td><input type="file" value="" name="anh3" required></td></td>
           </tr>
            <tr>
               <td>Ngày nhập:</td>
               <td><input type="date" value="" name="ngaynhap" required></td> <!--<?php $today = date("d/m/Y"); echo $today; ?> -->
           </tr>
           <tr>
               <td>Số lượng nhập:</td>
               <td><input type="text" value="" name="soluong" required></td> 
           </tr>
           <tr>
               <td>mô tả:</td>
               <td style="width: 150%;">
                 <form action="_posteddata.php" method="post">
                      <textarea  name="mota" cols="" rows=""></textarea>
                     
           <!--          <input name="ok" type="submit" value="Ok" /> -->
                </form>
              </td>
           </tr>
           <tr>
           	<td colspan="2" style="padding-bottom: 90px; padding-top: 20px;"><button style="width: 100px; background-color: darkgray;" type="submit">Lưu</button></td>
           </tr>

        </table>
      </form>
      </div>
     

</div>

</div>
  <script type="text/javascript" >
    
                       CKEDITOR.replace( 'mota' );
        
                       </script>
