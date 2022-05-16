<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database banner</h4>
<?php if($_SESSION['admin'] == true){ ?>
      <a class="pull-left themmoi" href="?action=thembanner_giaodien"> Thêm mới</a>
<?php }else{} ?>
      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
           <form method="POST" action="?action=banner">
          <input type="text" placeholder="Search By idbanner" name="timkiem_bn">&ensp;
          <button type="submit"><i class="fa fa-search"></i></button>
          <a href="?action=banner" style="font-size: 15px;">All</a>
        </form>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>idbanner</th>
                  <th class="theadd">Ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $row) { ?>
              <tr>
                  <td scope="row"><?= $row['idbanner'] ?></td>
                  <td><img src="./public_admin/image/banner/<?php echo $row['anh'] ?>" height='50'></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
          <?php if($_SESSION['admin'] == true){ ?>
                      <a href="?action=suabanner&id=<?= $row['idbanner'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoabanner&id=<?= $row['idbanner'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa">
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