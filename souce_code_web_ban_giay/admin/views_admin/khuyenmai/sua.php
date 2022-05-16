<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=suakhuyenmai_xl" method="post">  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td>idKM: </td>
               <td>
                <input disabled type="text" name="idKM" value=<?php echo $data['idKM']; ?>>
                <input type="hidden" name="idKM" value=<?php echo $data['idKM']; ?> >
              </td>
           </tr>
            <tr>
               <td>Loại Khuyến Mãi:</td>
               <td><input required type="text" name="loaiKM" value=<?php echo $data['loaiKM']; ?> ></td>
           </tr>
            <tr>
               <td>Giá trị khuyễn mãi:</td>
               <td><input required type="text" name="giatriKM" value=<?php echo $data['giatriKM']; ?>></td>
           </tr>
            <tr>
               <td>Ngày bắt đầu:</td>
               <td><input type="date" name="ngaybatdau" value=<?php echo $data['ngaybatdau']; ?>></td>
           </tr>
           <tr>
               <td>Ngày kết thúc:</td>
               <td><input type="date" name="ngayketthuc" value=<?php echo $data['ngayketthuc']; ?>></td>
           </tr>
           
           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>

        </table>
        </form>
      </div>
     

</div>

</div>