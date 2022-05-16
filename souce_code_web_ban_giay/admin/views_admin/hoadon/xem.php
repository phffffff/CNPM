<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database hoadon</h4>

      
      <div style="background-color: #e5e5e5; padding: 60px 50px 10px; color:gray;border-radius: 20px;">

        <table border="1" cellpadding="5">
          <tr>
            <td><h4>id hóa đơn </h4></td>
             <!-- có thể thay = $data['idUser'] là php echo "hello". $data['idUser']; -->
            <td><h4> &emsp;<?= $data['idhoadon'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>tên khách hàng</h4></td>
            <td><h4> &emsp;<?= $name_user['ho'];   ?> <?= $name_user['ten'];   ?>   </h4></td>
          </tr>
          <tr>
            <td><h4>tên sản phẩm</h4></td>
            <td><h4> &emsp;<?= $name_sanpham['tenSP'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Tổng tiền </h4></td>
            <td><h4> &emsp;<?= $data['tongtien'];   ?>.000 VND  </h4></td>
          </tr>
          <tr>
            <td><h4>Ngày mua </h4></td>
            <td><h4> &emsp;<?= $data['ngaymua'];   ?></h4></td>
          </tr>
          
          
        </table>


        <br>
        <br>
        <br>
      </div>
     

</div>

</div>