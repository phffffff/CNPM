<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database hoadon</h4>

      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <form method="POST" action="?action=hoadon">
          <input type="text" placeholder="Search By idUser" name="timkiem_hd">&ensp;
          <button type="submit"><i class="fa fa-search"></i></button>
          <a href="?action=hoadon" style="font-size: 15px;">All</a>
        </form>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>idhoadon</th>
                  <th class="theadd">idUser</th>
                  <th class="theadd">idSP</th>
                  <th class="theadd">Tổng tiền</th>
                  <th class="theadd">Ngày mua</th>
                  <th class="theadd">Số lượng mua</th>
                  <th class="theadd">Trạng thái</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
                 
           
              <tr>
                  <td scope="row"><?= $value['idhoadon'] ?></td>
                 <td><?= $value['idUser'] ?>  </td>
                  <td><?= $value['idSP'] ?></td>
                  <td><?= $value['tongtien'] ?>.000 VND</td>
                  <td><?= $value['ngaymua']?></td>
                  <td><?= $value['soluongmua'] ?></td>
                  <td>
                    <?php if($value['trangthai'] == 0){
                            echo "Chưa Xét duyệt";
                     }else{
                      echo "Đã duyệt";
                     } ?>
                  </td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                       <a href="?action=xemhoadon&id=<?= $value['idhoadon'] ?>&idSP=<?= $value['idSP'] ?>&idUser=<?= $value['idUser'] ?>" type="button" class="btn btn-light">Chi tiết</a>

          <?php if($_SESSION['admin'] == true){ ?>
                  <?php if($value['trangthai'] == 0){ ?>
                    <a href="?action=duyethoadon&id=<?= $value['idhoadon'] ?>&idSP=<?= $value['idSP'] ?>&soluongmua=<?php echo $value['soluongmua'] ?>" type="button" class="btn btn-primary">Duyệt hóa đơn</a>
                  <?php }else{} ?>
                    <a href="?action=xoahoadon&id=<?= $value['idhoadon'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa">
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



