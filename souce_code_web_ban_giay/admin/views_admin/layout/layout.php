<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="../?action=trangchu" title="xem trang web">
        <div style="color:white;" href="#">Quản Trị Viên<br> </div> 
      	<div style="line-height: 1px; color:white;font-size: 10px;"><span style="color:orange;">SHOE</span> STORE</div>
      </a>
      
    </header>
    <ul class="nav">
      <li>
        <a href="?action=trangchu">
         <i class="fa fa-home"></i>Trang chủ 
        </a>
      </li>
      <li>
        <a href="?action=taikhoan">
          <i class="fa fa-table"></i>Quản lý tài khoản
        </a>
      </li>
      <li>
        <a href="?action=sanpham">
         <i class="fa fa-table"></i>Quản lý sản phẩm
        </a>
      </li>
      <li>
        <a href="?action=loaisanpham">
          <i class="fa fa-table"></i>Quản lý loại sản phẩm
        </a>
      </li>
      <li>
        <a href="?action=hoadon">
         <i class="fa fa-table"></i>Hóa đơn
        </a>
      </li>
      <li>
        <a href="?action=banner">
         <i class="fa fa-table"></i> Quản lý banner
        </a>
      </li>
      <li>
        <a href="?action=khuyenmai">
          <i class="fa fa-table"></i>Quản lý khuyến mãi
        </a>
      </li>


       



    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
      	<ul class="nav navbar-nav navbar-left">
      		<li>
      			


<!--
                        <div class="search_box pull-right">
                            
                            <input type="text" placeholder="Search"/>&ensp;
                            <a href="#"><i class="fa fa-search" id="i1"></i></a>

                              <span style="font-size: 20px;padding-left: 10px;"> |</span>
                        </div>
-->



          </li>
          <li>
            <a href="#" style="margin-right: 30px;">
          	<img class="anhuser" src="public_admin/image/author.jpg" alt="">&emsp;
            <?php
            if(isset($_SESSION['tendangnhap'])){
              echo "Xin chào ". $_SESSION['tendangnhap'];
            }else{
              echo "Xin Chào ...";
            }

            ?>
            </a>
            
          </li>
          
        </ul>
<!--
        <ul class="nav navbar-nav navbar-right" style="padding-right: 30px;">
          <li class="nav2">

            <a href="#"><i class="fa fa-bell nav1"></i></a>
          </li>
           <li>
            <a href="#"><i class="fa fa-envelope nav1"></i></a>
          </li>
        </ul>
-->
      </div>
    </nav>


    


  </div>
</div>