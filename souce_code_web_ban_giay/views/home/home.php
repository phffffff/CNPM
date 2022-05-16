
<?php require_once('./views/slider/slider.php');  ?>


<div>

<?php foreach ($data_loaisanpham as $value) {  ?>

<div class="col-sm-3">
         <div class="single-product">
            <div class="product-f">
                 <a href="?action=cuahang&id=<?php echo $value['idLoaiSP'] ?>">
                     <img style="height: 270px; width: 300px;" src="admin/public_admin/image/loaisanpham/<?php echo $value['hinhanh'] ?>" alt="Product Title" >
                </a>
             <div class="actions-btnn">
              <span><?php echo $value['tenLSP'] ?></span>
             </div>
          </div>
        </div>
</div>

<?php }  ?>

</div>





<div class="khuyenmai">
    <div class="col-sm-12">
           <h2>Khuyến Mãi Hấp Dẫn Lên Đến 30%</h2>
          <center><button type="button" class="btn btn-outline-warning"><a href="?action=cuahang&gtkm=30">Mua Ngay</a></button> </center>
    </div>

 </div>











<div class="container cn2">
<div class="row">

               

                     <div class="col-sm-12 c_cn2">
                   <!-- hiển thị sản phẩm -->

                    <div class="features_items"><!--features_items-->
                       
                        <h2 class="title text-left" id="makm">SẢN PHẨM NỔI BẬT
                            <a href="?action=cuahang1" class="pull-right" id="textid">Xem tất cả >></a>
                        </h2>
                   
                   <?php foreach ($data_sanphamtrangchu as $value) {  ?>
                    
                       <div class="col-sm-3">
                            <div class="single-product">
                                            <div class="product-f">
                                                <a href="#"><img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="?action=giohang&act=add_giohang&id=<?= $value['idSP'] ?>"><i style="font-size: 25px; text-align: center;" class="fa fa-shopping-cart"></i></a>
                                                    <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" data-toggle="modal" ><i style="font-size: 25px; text-align: center;" class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#"><center> <?php echo $value['tenSP'] ?> </center></a></p>
                                                <span><center><?php echo $value['Dongia'].".000 vnd" ?></center></span>
                                            </div>
                                        </div>
                        </div>
                
                  <?php } ?>

                     </div>


                     <a href="?action=cuahang1">
                     <button type="button" class="btn btn-secondary btn-lg btn-block">Xem thêm nhiều sản phẩm hơn</button>
                      </a>








                </div>


</div>   <!-- div row -->
</div> <!-- div container -->



 
 <!-- <?php// require_once('./views/sanphammoinhat/sanphammoinhat.php');  ?>  -->