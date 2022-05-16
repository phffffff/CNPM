<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database banner</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=suabanner_xl" method="post"  enctype="multipart/form-data">  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td>idbanner: </td>
               <td>
                <input disabled type="text" name="idbanner" value=<?php echo $data['idbanner']; ?>>
                <input type="hidden" name="idbanner" value=<?php echo $data['idbanner']; ?> >
              </td>
           </tr>
            <tr>
               <td>ảnh:</td>
               <td><input type="file" name="anh" value=<?php echo $data['anh']; ?> ></td>
           </tr>
           
           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>

        </table>
        </form>
      </div>
     

</div>

</div>