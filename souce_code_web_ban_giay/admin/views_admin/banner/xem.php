<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database banner</h4>

      
      <div style="background-color: #e5e5e5; padding: 60px 50px 10px; color:gray;border-radius: 20px;">

        <table border="1" cellpadding="5">
          <tr>
            <td><h4>idUser </h4></td>
             <!-- có thể thay = $data['idUser'] là php echo "hello". $data['idUser']; -->
            <td><h4> &emsp;<?= $data['idUser'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Họ </h4></td>
            <td><h4> &emsp;<?= $data['ho'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Tên</h4></td>
            <td><h4> &emsp;<?= $data['ten'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Email </h4></td>
            <td><h4> &emsp;<?= $data['email'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Địa chỉ </h4></td>
            <td><h4> &emsp;<?= $data['diachi'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Giới tính </h4></td>
            <td><h4> &emsp;<?= $data['gioitinh'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Số điện thoại </h4></td>
            <td><h4> &emsp;<?= $data['sodienthoai'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Tên đăng nhập </h4></td>
            <td><h4> &emsp;<?= $data['tendangnhap'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Chức vụ </h4></td>
            <td><h4> &emsp;<?php if( $data['idQuyen'] == 0) echo "admin";  else echo "khách hàng"; ?>  </h4></td>
          </tr>
        </table>


        <br>
        <br>
        <br>
      </div>
     

</div>

</div>

<!--
        <h4>idUser:           <?= $data[idUser];   ?>         </h4>
        <h4>họ:               <?= $data[ho];   ?>             </h4>
        <h4>tên:              <?= $data[ten];   ?>            </h4>
        <h4>email:            <?= $data[email];   ?>          </h4>
        <h4>địa chỉ:          <?= $data[diachi];   ?>         </h4>
        <h4>giới tính:        <?= $data[gioitinh];   ?>       </h4>
        <h4>số điện thoại:    <?= $data[sodienthoai];   ?>    </h4>
        <h4>tên đăng nhập:    <?= $data[tendangnhap];   ?>    </h4>

        -->