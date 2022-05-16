<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>HOÀN TẤT ĐƠN HÀNG</h2>
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
				  <li class="active">Hoàn Tất Đơn Hàng</li>
				</ol>
			</div>
		</div>
	</section>





<!-- pages-title-end -->
<!-- order-complete content section start -->
<section class="pages checkout order-complete section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="complete-title">
					<p>Cảm ơn bạn. Đơn đặt hàng của bạn đã được nhận; Đã nhận được đơn đặt hàng của bạn.</p>
					<p>
						Vui Lòng Chờ Xét Duyệt
                        <a href="?action=huy_session" style="color:red;font-weight: bold;">&emsp;Về trang chủ</a>
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>ĐƠN ĐẶT HÀNG CỦA BẠN</strong></h3>
					</div>
					<div class="cart-form-text pay-details">
						<table>
							<thead>
								<tr>
									<th>Sản Phẩm</th>
									<td>Tiền</td>
								</tr>
							</thead>
							<tbody>
								
										<tr>
											<th><?php foreach ($_SESSION['sanpham'] as $value) { ?>
										               <?php echo $value['tenSP'].'<br>'; ?>
										       <?php } ?></th>
											<td><?php echo $_SESSION['tongtien'] ?>.000 VND</td>
										</tr>

								<tr>
									<th>Khuyến mãi</th>
									<td><?php echo $_SESSION['giatriKM'].'%'; ?></td>
								</tr>
								
								<tr>
									<th>VAT</th>
									<td>0 VNĐ</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng tiền</th>
									<td>
										<?php
										if($_SESSION['giatriKM'] != 0){
								         	$_SESSION['tongtien_KM'] = ( $_SESSION['tongtien'] - ($_SESSION['tongtien'] * ($_SESSION['giatriKM'] )) / 100 );
									        echo $_SESSION['tongtien_KM'].'.000 VND' ;
									    }
									    else{
									    	echo $_SESSION['tongtien'].'.000 VND';
									    }
									    ?>
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="order-details padding60">
					<div class="log-title">
						<h3><strong>CHI TIẾT KHÁCH HÀNG</strong></h3>
					</div>
					<div class="por-dse clearfix">
						<ul>
							<li><span>Tên KH<strong>:</strong></span><?php echo $data_user['ten']; ?></li>
							<li><span>Email<strong>:</strong></span>  <?php echo $data_user['email']; ?> </li>
							<li><span>Số ĐT<strong>:</strong></span>  <?php echo $data_user['sodienthoai']; ?> </li>
						</ul>
					</div>
				</div>
				<div class="order-address bill padding60">
					<div class="log-title">
						<h3><strong>ĐỊA CHỈ LIÊN HỆ</strong></h3>
					</div>
					<p>Phone:  <?php echo $data_user['sodienthoai']; ?></p>
					<p>Email:  <?php echo $data_user['email']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- order-complete content section end -->





<!-- Tất cả bao gồm có session['giatriKM']     session['sanpham'] : cái này kiểu mảng chạy foeach
	session['tongtien_KM']   và   session['tongtien']      session['thanhtien']
	  session[tendangnhap]    session['matkhau']           session['admin']
 	    -->