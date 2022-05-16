<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database loaisanpham</h4>
<?php if($_SESSION['admin'] == true){ ?>
      <a class="pull-left themmoi" href="?action=themloaisanpham_giaodien"> Thêm mới</a>
 <?php }else{} ?>
      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <form method="POST" action="?action=loaisanpham">
          <input type="text" placeholder="Search By Name" name="timkiem_lsp">&ensp;
          <button type="submit"><i class="fa fa-search"></i></button>
          <a href="?action=loaisanpham" style="font-size: 15px;">All</a>
        </form>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>idLoaiSP</th>
                  <th class="theadd">Tên loại sản phẩm</th>
                  <th class="theadd">Hình ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
                 
           
              <tr>
                  <td scope="row"><?= $value['idLoaiSP'] ?></td>
                 <td><?= $value['tenLSP'] ?></td>
                  <td><img src="./public_admin/image/loaisanpham/<?= $value['hinhanh'] ?>"  height='90' ></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemloaisanpham&id=<?= $value['idLoaiSP'] ?>" type="button" class="btn btn-light">Chi tiết</a>

      <?php if($_SESSION['admin'] == true){ ?>
                      <a href="?action=sualoaisanpham&id=<?= $value['idLoaiSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoaloaisanpham&id=<?= $value['idLoaiSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa ">
                        <i class="fa fa-times"></i></a>
      <?php }else{} ?>

                  </td> 
              </tr>

              <?php } ?>
             
          </tbody>
      </table>

      <br>
      <br>
      <br>
     

</div>

</div>



