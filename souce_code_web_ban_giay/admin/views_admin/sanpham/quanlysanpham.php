<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>
 <?php if($_SESSION['admin'] == true){ ?>
      <a class="pull-left themmoi" href="?action=them_sanpham_giaodien"> Thêm mới</a>
<?php }else{} ?>
      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <form method="POST" action="?action=sanpham">
          <input type="text" placeholder="Search By Name" name="timkiem_sp">&ensp;
          <button type="submit"><i class="fa fa-search"></i></button>
          <a href="?action=sanpham" style="font-size: 15px;">All </a>
        </form>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>Mã SP</th>
                  <th class="theadd">Tên sản phẩm</th>
                  <th class="theadd">Giá thành</th>
                  <th class="theadd">Loại</th>
                  <th class="theadd">Số lượng</th>
                  <th class="theadd">Hình ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
                 
           
              <tr>
                  <td scope="row"><?= $value['idSP'] ?></td>
                 <td><?= $value['tenSP'] ?></td>
                  <td><?= $value['Dongia'] ?>.000 VND</td>
                  <td>
                    <?php 
                    if($value['idLoaiSP'] == 1) echo "Giày Công Sở"; 
                    if($value['idLoaiSP'] == 2) echo "Giày Học Sinh"; 
                    if($value['idLoaiSP'] == 3) echo "Giày Da Bò"; 
                    if($value['idLoaiSP'] == 4) echo "Giày Thời Trang"; 
                    ?>
                  </td> 
                  <td><?= $value['soluong'] ?></td>
                   <td><img src="./public_admin/image/sanpham/<?php echo $value['anh1'] ?>" widh='40' height='40'></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemsanpham&id=<?= $value['idSP'] ?>" type="button" class="btn btn-light">Chi tiết</a>
                      
      <?php if($_SESSION['admin'] == true){ ?>
                      <a href="?action=suasanpham&id=<?= $value['idSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoasanpham&id=<?= $value['idSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa  ">
                        <i class="fa fa-times"></i></a>
        <?php }else{} ?>

        <?php if( $value['soluong'] < 10 ) {  ?>
        
        <a class="soluong" href="?action=them_soluong_giaodien&soluong=<?php echo $value['soluong']?>&idSP=<?php echo $value['idSP']?>"><br>Số lượng nhỏ hơn 10<br></a>

      <?php } ?>

                  </td> 
              </tr>

              <?php } ?>
             
          </tbody>
      </table>
<span style="font-size: 20px;">
      <?php 
      if(!isset($timkiem_sp)){

         $tong = ceil($tongsotrang);

       for($i = 1; $i <= $tong; $i++){
          echo '<a href="?action=sanpham&trang='.$i.'">'.$i.'</a> | ';
        }
      }

      ?>
</span>
  <!--
                       <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
      -->

      <br>
      <br>
      <br>
     

</div>

</div>


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>



