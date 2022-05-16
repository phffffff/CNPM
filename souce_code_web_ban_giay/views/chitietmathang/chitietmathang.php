<!-- pages-title-start -->

    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2><?php echo $data_chitiet['tenSP']; ?></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Chi Tiết mặt hàng</li>
                </ol>
            </div>
        </div>
    </section>





    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                     
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#">
                                                    <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh1']; ?>" class="simpleLens-big-image"></a>
                                            </div>
                                  
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#"><img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh2']; ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                   
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <a class="simpleLens-image" data-lens-image="public/image/one.png" href="#"><img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh3']; ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                  
                                    </div>
                                </div>
                            </div>
                            <div class="quick-thumb">
                                <ul class="product-slider">
                            
                                        <li class="active float"><a data-toggle="tab" href="#sin-1"> <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh1']; ?>"  /> </a></li>
                                 
                                        <li class="float"><a data-toggle="tab" href="#sin-2"> <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh2']; ?>" alt="small image" /> </a></li>
                                   
                                        <li class="float"><a data-toggle="tab" href="#sin-3"> <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh3']; ?>" alt="small image" /> </a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3><?php echo $data_chitiet['tenSP']; ?></h3>
                                <div class="ratting floatright">
                                    
                                </div>
                                <h5><?php echo $data_chitiet['Dongia']; ?>.000 VNĐ</h5>
                             
                                    <p><?php echo $data_chitiet['mota']; ?></p>
                            
                                <div class="list-btn">
                                    <a href="?action=giohang&act=add_giohang&id=<?= $data_chitiet['idSP'] ?>">Thêm vào giỏ</a>
                                 
                                    <a href="#info">Chi tiết</a>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix" id="info">
                         
                                <li class="active float"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>
                           
                            <li class="float"><a data-toggle="tab" href="#reviews">Đánh giá</a></li>
                        </ul>
                        <div class="tab-content">
                         
                                <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                                    <div class="tb">
                                        <h5>ĐẶC ĐIỂM</h5>
                                        <ul>
                                            <li>
                                                <span>kiểu giày</span>
                                                <div><?php echo $ten_loaisanpham['tenLSP']; ?></div>
                                            </li>
                                            <li>
                                                <span>Màu sắc</span>
                                                <div><?php echo $ten_color['color']; ?></div>
                                            </li>
                                            <li>
                                                <span>Kích cỡ</span>
                                                <div><?php echo $size['size']; ?></div>
                                            </li>
                                            <li>
                                                <span>Số lượng còn trong kho</span>
                                                <div><?php echo $size['soluong']; ?></div>
                                            </li>
                                            <li>
                                                <span>Ngày nhập</span>
                                                <div><?php echo $data_chitiet['ngaynhap']; ?></div>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                          
                            <div class="<?php if ($data['MaDM'] == 0) {
                                            echo 'info-reviews review-text tab-pane fade in';
                                        } else {
                                            echo 'info-reviews moreinfo tab-pane fade in active';
                                        } ?>" id="reviews">
                                <div class="about-author">
                                    <!-- comments -->
                                    <div class="post-comments">
                                        <!-- comment -->
                                        <div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com?act=detail&id=<?= $data['MaSP'] ?>" data-numposts="5" data-width=""></div>
                                        <!-- /comment -->
                                    </div>
                                    <!-- /comments -->
                                </div>
                                <hr />




                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                Email:
                                            </td>
                                            <td>
                                                Nội dung góp ý:
                                            </td>
                                        </tr>

                                        <?php foreach ($xem_gopy as $value) { ?>
                                             <?php if($data_chitiet['idSP'] == $value['idSP']) { ?>
                                        <tr>

                                            <td>
                                               <?php echo $value['email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['noidung'];?>
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                    <?php } ?>
                                    </table>
                                </div>





                                <div class="your-rating log-title">
                                    <h3>Góp ý :</h3>
                                </div>
                                <div class="custom-input">
                                    <form action="?action=gopy&id=<?php echo $data_chitiet['idSP'];?>" method="POST">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-mail">
                                                    <span>Nhập email của bạn:</span>
                                                    <input  type="email" name="email_gopy">
                                                    <input type="hidden" name="idSP" value="<?php echo $data_chitiet['idSP'];?>">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="custom-mess">
                                                <textarea  name="noidung_gopy" placeholder="Nội dung góp ý"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="submit-text">
                                                <input type="submit" name="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
 