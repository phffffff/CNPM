<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database loaisanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=sualoaisanpham_xl" method="post"enctype="multipart/form-data">  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td>id Loại sản phẩm: </td>
               <td>
                <input disabled type="text" name="idLoaiSP" value=<?php echo $data['idLoaiSP']; ?>>
                <input type="hidden" name="idLoaiSP" value=<?php echo $data['idLoaiSP']; ?> >
              </td>
           </tr>
            <tr>
               <td>Tên loại sản phẩm:</td>
               <td><input required type="text" name="tenLSP" value=<?php echo $data['tenLSP']; ?> ></td>
           </tr>
            <tr>
               <td>Hình ảnh:</td>
               <td><input type="file" name="hinhanh" ></td>
           </tr>
            
           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>

        </table>
        </form>
      </div>
     

</div>

</div>