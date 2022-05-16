<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 60px 50px 10px; color:gray;border-radius: 20px;">

        <table border="1" cellpadding="5">
          <tr>
            <td><h4>idKM </h4></td>
             <!-- có thể thay = $data['idUser'] là php echo "hello". $data['idUser']; -->
            <td><h4> &emsp;<?= $data['idKM'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Loại khuyến mãi </h4></td>
            <td><h4> &emsp;<?= $data['loaiKM'];   ?>   </h4></td>
          </tr>
          <tr>
            <td><h4>Giá trị khuyến mãi</h4></td>
            <td><h4> &emsp;<?= $data['giatriKM'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Ngày bắt đầu </h4></td>
            <td><h4> &emsp;<?= $data['ngaybatdau'];   ?>  </h4></td>
          </tr>
          <tr>
            <td><h4>Ngày kết thúc </h4></td>
            <td><h4> &emsp;<?= $data['ngayketthuc'];   ?>  </h4></td>
          </tr>
          
        </table>


        <br>
        <br>
        <br>
      </div>
     

</div>

</div>