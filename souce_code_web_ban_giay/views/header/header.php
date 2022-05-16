  
 <div class="header-middle"><!--header-middle-->
          
                <div class="row row_header">



                  <div class="col-sm-6" style="color: gray;">
                       <div class="dropdown" style="float:left;">
                         <button class="dropbtnn">Dịch Vụ Khách Hàng
                          <i class="fa fa-caret-down"></i>
                         </button>
                         <div class="dropdown-content" style="left:0;">
                         <a href="?action=gioithieu">Giới thiệu cửa hàng</a>
                         <a href="#lienhe">Thông tin liên hệ</a>
                         <a href="#">Gửi phản hồi</a>
                         </div>
                       </div>
                       <span class="kedoc">|</span>
                       Open: <?php echo $_SESSION['time'] ?> &emsp; Mail:  <?php echo $_SESSION['mail_1'] ?>&emsp; Phone:(+84) <?php echo $_SESSION['phone_1'] ?>
                     </div>



                      <div class="col-sm-6">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                         <!-- đăng ký -->
                              <li>
                               <div class="dropdown221">

                                 <?php  if(!isset($_SESSION['tendangnhap'])){ ?>
                               
                                  <i class="fa fa-plus img_user" title="Tài Khoản">
                                    <a href="?action=dangnhap" class="dangkya">Đăng ký </a></i>
                                  <?php }else{

                                  } ?>
                               
                                 
                            </div>
                            </li>

                      <!-- đăng nhập -->
                            <li>
                               <div class="dropdown22">
                                <i class="fa fa-user img_user" title="Tài Khoản">


                        <?php  if(isset($_SESSION['tendangnhap'])){

                               echo 'Chào '.$_SESSION['tendangnhap'];
                             }else{
                              echo '&emsp;Đăng nhập';
                             }
                             ?>



                              </i>
                                  <div class="dropdown-content22"> 
                                    <!-- <a class="aacount" href="#"><center><span>Đăng nhập</span></center></a>-->
                                     <ul>
                                        <?php  if(isset($_SESSION['tendangnhap'])){ ?>
                                          <li></li>
                                        <li><a class="aacount" style="margin-left: -40px;" href="?action=taikhoan&ten=<?php echo $_SESSION['tendangnhap']; ?>"><span>Tài khoản</span></a></li><br>
                                        <li><a class="aacount" href="?action=dangxuat" onclick="TBdangxuat()"><span>Đăng xuất</span></a></li>
                                    
                                        <?php if($_SESSION['admin'] == true || $_SESSION['banhang'] == true){ ?>
                                        <li>
                                          <a class="aacount"  href="admin/?action=trangchu"><span>Trang quản lý</span></a>
                                        </li>
                                     <?php }}else{ ?>
                                        <li><center><b class="hd_kh">Khách hàng<br><br></b></center></li>
                                        <li><a class="aacount" href="?action=dangnhap"><span>Đăng nhập</span></a></li>
                                      <?php } ?>
                                    </ul>
                                  </div>
                            </div>
                            </li>

                            </ul>
                        </div>
                    </div>



                </div>



        </div>




        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                       
                        <div class="mainmenuu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">

                               
                                <li><a href="?action=trangchu" class="active">
                                  <div class="btn-group">
                                        <img src="public/image/logo.png" alt="logo" title="về trang chủ">
                                 </div>
                                </a></li>
                                <li class="dropdown"><a href="?action=cuahang1">Cửa Hàng</a></li> 
                                 
                                 <!-- lấy action là id loại sản phẩm -->

                                <?php foreach ($data_loaisanpham as $value) {  ?>
                                <li class="dropdown"><a href="?action=cuahang&id=<?= $value['idLoaiSP'] ?>" style="font-size: 15px;"><?= $value['tenLSP'] ?></a></li>    
                              <?php }  ?>
                            </ul>
                        </div>
                    </div>
                    <form method="POST" action="?action=cuahang1">
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            

                              <input type="text" placeholder="Search By Name" name="timkiem_sp">&ensp;
                               <button type="submit"><i class="fa fa-search"></i></button>
                           
                            <a id="a1" href="?action=giohang&?act=list_giohang"> <i class="fa fa-shopping-cart" title="Giỏ Hàng Của Bạn"></i>&emsp;</a>

                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
<!-- end header bottom -->
    	
 <!-- /header -->


 <script>
   function TBdangxuat() {
       alert("Bạn muốn đăng xuất?");
}
 </script>