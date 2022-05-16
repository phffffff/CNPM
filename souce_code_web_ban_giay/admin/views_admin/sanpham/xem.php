<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 60px 50px 10px; color:gray;border-radius: 20px;min-height: 630px;">

       <div class="col-sm-7">
        <table border="1" cellpadding="5">
          <tr>
            <td style="width: 150px;"><h4>idSP </h4></td>
             <!-- có thể thay = $data['idUser'] là php echo "hello". $data['idUser']; -->
            <td><h4><?= $data['idSP'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Loại sản phẩm </h4></td>
            <td><h4> 
                   
                   <?php 
                    if($data['idLoaiSP'] == 1) echo "Giày Công Sở"; 
                    if($data['idLoaiSP'] == 2) echo "Giày Học Sinh"; 
                    if($data['idLoaiSP'] == 3) echo "Giày Da Bò"; 
                    if($data['idLoaiSP'] == 4) echo "Giày Thời Trang"; 
                    ?>
               </h4></td>
          </tr>
          <tr>
            <td><h4>Tên</h4></td>
            <td><h4><?= $data['tenSP'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Đơn Giá </h4></td>
            <td><h4> <?= $data['Dongia'];   ?>.000 VND  </h4></td>
          </tr>
          <tr>
            <td><h4>Màu </h4></td>
            <td><h4><?= $data['color'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Size </h4></td>
            <td><h4> <?=  $data['size'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Ngày nhập </h4></td>
            <td><h4> <?= $data['ngaynhap'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Mô Tả</h4></td>
            <td><h4> <?= $data['mota'];   ?>  </h4></td>
          </tr>
        </table>
     </div>
          <div class="col-sm-5">
              <h4>ảnh 1 </h4>
              <h4> <img src="./public_admin/image/sanpham/<?php echo $data['anh1'] ?>" height='90'> </h4>
              <h4>ảnh 2 </h4>
              <h4> <img src="./public_admin/image/sanpham/<?php echo $data['anh2'] ?>"  height='90'>  </h4>
              <h4>ảnh 3 </h4>
            <h4> <img src="./public_admin/image/sanpham/<?php echo $data['anh3'] ?>"height='90'>  </h4>
     </div>  


        <br>
        <br>
        <br>
 </div>
                      
          

</div>

</div>