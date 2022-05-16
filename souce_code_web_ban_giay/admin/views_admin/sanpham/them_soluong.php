<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

  
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">

        <form action="?action=them_soluong" method="POST" enctype="multipart/form-data">
      	<table border="0" cellpadding="10" >
         <input type="hidden" value="<?php echo $idSP; ?>" name="idSP" required>
         <input type="hidden" value="<?php echo $soluong_sanpham; ?>" name="soluong_sanpham" required>
           <tr>
               <td>Số lượng nhập thêm:</td>
               <td><input type="text" value="" name="soluong_them" required></td> 
           </tr>
           
           <tr>
           	<td colspan="2" style="padding-bottom: 90px; padding-top: 20px;"><button style="width: 100px; background-color: darkgray;" type="submit">Thêm</button></td>
           </tr>

        </table>
      </form>
      </div>
     

</div>

</div>