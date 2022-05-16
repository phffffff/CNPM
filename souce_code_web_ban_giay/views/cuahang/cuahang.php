<div class="cuahang">
<h1>Cửa Hàng</h1>
</div>

<section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Cửa hàng</li>
                </ol>
            </div>
        </div>
    </section>

<div class="container cn2">
<div class="row">

                <div class="col-sm-3">
                    <div class="left-sidebar">

                        <h2>Thể Loại</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            <?php foreach ($data_loaisanpham as $value) {  ?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="?action=cuahang&id=<?= $value['idLoaiSP'] ?>">
                                            <?= $value['tenLSP'] ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>

                        <?php } ?>


                        </div>

                    </div>




        <div class="chongia">
            <div class="chongia2">

               <div class="dropdown" style="float:left; margin-left: 20px; margin-right: 30px;">
                 <button class="dropbtn">Màu</button>
                 <div class="dropdown-content" style="left:0;">

                 <div class="container" style="background-color: white; width: 500px;">
                  <?php foreach ($color as $value) {   ?>
                    <div class="col-sm-2">
                        <a href="?action=cuahang&idmau=<?= $value['idcolor'] ?>" class="acolor">
                            <?php echo $value['color']; ?></a>
                    </div>
                   <?php } ?>
                </div>

                 </div>
               </div>
                <div class="dropdown" style="margin-left: 9px;">
                 <button class="dropbtn">Size</button>
                 <div class="dropdown-content" style="left:-50px;">

                  <div class="container" style="background-color: white; width: 250px;">
                  <?php foreach ($size as $value) {   ?>
                    <div class="col-sm-2">
                        <a href="?action=cuahang&idsize=<?= $value['idsize'] ?>" class="acolor">
                            <?php echo $value['size']; ?></a>
                    </div>
                   <?php } ?>
                </div>

                 </div>
               </div>



             <!-- giá -->
             <br>
             <br>
             

        </div>
<center><h4>Chọn giá</h4></center>
            <div style="">

        <form method="POST" action="?action=cuahang1">
                 <div class="" style="padding: 5px;">
         
                 <label>Chọn giá bắt đầu: </label>
                 <select name="a">
                   <option value="100">100.000 vnd</option>
                   <option value="200">200.000 vnd</option>
                   <option value="300">300.000 vnd</option>
                   <option value="400">400.000 vnd</option>
                   <option value="500">500.000 vnd</option>
                   <option value="600">600.000 vnd</option>
                   <option value="700">700.000 vnd</option>
                   <option value="800">800.000 vnd</option>
                   <option value="900">900.000 vnd</option>
                   <option value="1000">1.000.000 vnd</option>
                 </select>

                 <br>
                 <br>

                <label>Chọn giá Kết thúc: </label>
                 <select name="b">
                    <option value="100">100.000 vnd</option>
                   <option value="200">200.000 vnd</option>
                   <option value="300">300.000 vnd</option>
                   <option value="400">400.000 vnd</option>
                   <option value="500">500.000 vnd</option>
                   <option value="600">600.000 vnd</option>
                   <option value="700">700.000 vnd</option>
                   <option value="800">800.000 vnd</option>
                   <option value="900">900.000 vnd</option>
                   <option value="1000">1.000.000 vnd</option>
                 </select>
                
                <br>
                <br>
                 <center>
                 <input type="submit" value="Tìm Kiếm">
                 </center>
        
                 </div>
        </form>
  </div>
<!-- giá -->
</div>

<br>
<br>


                    
   </div>  <!-- div thứ 3 -->






                     <div class="col-sm-9 padding-right c_cn2">
                   <!-- hiển thị sản phẩm -->

                    <div class="features_items"><!--features_items-->
                       
                        <h2 class="title text-center">SHOE - STORE</h2>
                        
<?php foreach ($data_sanphamcuahang as $value) { ?>

                <div class="col-sm-3">
                            <div class="single-product">
                                            <div class="product-f">
                                                <a href="#"><img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>">
                                                        <center><i style="font-size: 30px;color:black;" class="fa fa-shopping-cart"></i></center>
                                                    </a>
                                                    <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" data-toggle="modal" >
                                                        <center><i style="font-size: 20px;" class="fa fa-eye"></i></center>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#"><center> <?php echo $value['tenSP'] ?></center></a></p>
                                                <center>size:  <?php echo $value['size'] ?>  </center>
                                                <center>Màu:  <?php echo $value['color'] ?>  </center>
                                                <center>SL trong kho:  <?php echo $value['soluong'] ?>  </center>
                                                <center>Khuyến mãi:  <?php echo "<b class='km_km'>".$value['giatriKM']."%</b>" ?>  </center>
                                                <span>
                                                  <center>
                                                    <?php if($value['giatriKM'] != 0){
                                                      echo " <strike><i>".$value['Dongia'].".000 vnd</i></strike><br> ";
                                                      echo " <i class='fa fa-arrow-right'></i> ";
                                                      echo $value['Dongia'] - ($value['Dongia']*$value['giatriKM']/100).".000 vnd";
                                                          }else{
                                                            echo "<br>";
                                                            echo $value['Dongia'].".000 vnd";
                                                          }
                                                     ?>
                                                  </center>
                                                </span>



                                            </div>
                                        </div>
                        </div>

   <?php } ?>
                    </div><!--features_items-->

                    <!-- 
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    -->
                </div>


</div>   <!-- div row -->

</div>


<br>
<br>
<br>
<br>
<br>
<style>
  b.km_km{
    color: red;
  }
  strike i{
    color: black;
    font-weight: normal;
  }
</style>