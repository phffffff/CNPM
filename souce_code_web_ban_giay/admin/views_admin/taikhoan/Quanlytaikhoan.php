<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database nguoidung</h4>
 <?php if($_SESSION['admin'] == true){ ?>
      <a class="pull-left themmoi" href="?action=them_giaodien"> Thêm mới</a>
<?php }else{} ?>
      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
        <form method="POST" action="?action=taikhoan">
          <input type="text" placeholder="Search By Name" name="timkiem">&ensp;
          <button type="submit"><i class="fa fa-search"></i></button>
          <a href="?action=taikhoan" style="font-size: 15px;">All</a>
        </form>

      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>Mã ND</th>
                  <th class="theadd">Họ</th>
                  <th class="theadd">Tên</th>
                  <th class="theadd">SDT</th>
                  <th class="theadd">Email / Quyền</th>
                  <th class="theadd">Giới tính</th>
                  <th class="theadd">Địa chỉ</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $row) { ?>
              <tr>
                  <td scope="row"><?= $row['idUser'] ?></td>
                  <td><?= $row['ho']?></td>
                  <td><?= $row['ten'] ?></td>
                  <td><?= $row['sodienthoai'] ?></td>
                  <td>
                    <?= $row['email'] ?>
                    <br>
                    <?php if($row['idQuyen'] == 1){
                              echo "admin";
                            }
                            if($row['idQuyen'] == 2){
                              echo "Người Bán Hàng";
                            }
                            if($row['idQuyen'] == 0){
                              echo "Khách hàng";
                            }
                     ?>
                  </td>
                  <td><?= $row['gioitinh'] ?></td>
                  <td><?= $row['diachi'] ?></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemnguoidung&id=<?= $row['idUser'] ?>" type="button" class="btn btn-light">Chi tiết</a>

      <?php if($_SESSION['admin'] == true){ ?>
                      <a href="?action=edit&id=<?= $row['idUser'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoanguoidung&id=<?= $row['idUser'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa người dùng">
                        <i class="fa fa-user-times"></i></a>
                        <br>
                        <!-- phân quyền -->
                        <div style="font-size: 13px;"><a href="?action=phanquyen&id=<?= $row['idUser'] ?>&quyen=0">Khách hàng</a>&emsp;<a href="?action=phanquyen&id=<?= $row['idUser'] ?>&quyen=2">Người bán hàng</a></div>
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



