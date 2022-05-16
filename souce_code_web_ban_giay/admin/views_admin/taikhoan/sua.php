<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database nguoidung</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=sua_xl" method="post">  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td>idUser: </td>
               <td>
                <input disabled type="text" name="id" value=<?php echo $data['idUser']; ?>>
                <input type="hidden" name="id" value=<?php echo $data['idUser']; ?> >
              </td>
           </tr>
            <tr>
               <td>họ:</td>
               <td><input  required type="text" name="ho" value=<?php echo $data['ho']; ?> ></td>
           </tr>
            <tr>
               <td>tên:</td>
               <td><input required type="text" name="ten" value=<?php echo $data['ten']; ?>></td>
           </tr>
            <tr>
               <td>email:</td>
               <td><input id="email" required type="text" name="email" value=<?php echo $data['email']; ?>></td>
           </tr>
           <tr>
               <td>địa chỉ:</td>
               <td><input required type="text" name="diachi" value=<?php echo $data['diachi']; ?>></td>
           </tr>
            <tr>
              <td>Giới tính:</td>
              <td>
                <input type="radio" name="gioitinh" value="nam" checked>Nam 
                <input type="radio" name="gioitinh" value="nu" >Nữ
              </td>
           </tr>
            <tr>
               <td>số điện thoại:</td>
               <td><input required type="text" name="sodienthoai" value=<?php echo $data['sodienthoai']; ?>></td>
           </tr>
            <tr>
               <td>tên đăng nhập:</td>
               <td><input required type="text" name="tendangnhap" value=<?php echo $data['tendangnhap']; ?>></td>
           </tr>
           <tr>
               <td>mật khẩu:</td>
               <td><input required disabled type="password" name="matkhau" value=<?php echo $data['matkhau']; ?>></td>
           </tr>
           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>

        </table>
        </form>
      </div>
     

</div>

</div>
