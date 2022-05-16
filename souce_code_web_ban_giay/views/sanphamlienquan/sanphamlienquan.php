<div class="recommended_items"><!--recommended_items-->
   <div class="container spnb">
                        <h2 class="title text-left" id="makm">SẢN PHẨM LIÊN QUAN
                            <a href="?action=cuahang1" class="pull-right" id="textid">Xem tất cả >></a>
                        </h2>
   
                        
                        <div id="recommended-item-carousel">


                            <div class="carousel-inner">

                                <div class="item active"> 
<?php foreach ($data_sanphamlienquan as $value) { ?>
                                
                                     <div class="col-sm-3">
                            <div class="single-product">
                                            <div class="product-f">
                                                <a href="#"><img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="Product Title" class="img-products" /></a>
                                                <div class="actions-btn">
                                                    <a href="#">
                                                        <center><i style="font-size: 30px;" class="fa fa-shopping-cart"></i></center>
                                                    </a>
                                                    <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>" data-toggle="modal" >
                                                        <center><i style="font-size: 20px;" class="fa fa-eye"></i></center>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#"><center> <?php echo $value['tenSP'] ?> </center></a></p>
                                                <span><center><?php echo $value['Dongia'].".000 vnd" ?></center></span>
                                            </div>
                                        </div>
                        </div>

                         <?php  } ?>      
                                   
                            </div>


                            <!-- 2 mũi tên trong slide -->


                        </div> 
                    </div><!--/recommended_items-->


</div> <!-- div container -->

<div class="container container2">

        <button type="button" class="btn btn-primary btn-lg btn-block">
        <a href="?action=cuahang1">XEM NHIỀU SẢN PHẨM HƠN</a>
        </button>

    </div>