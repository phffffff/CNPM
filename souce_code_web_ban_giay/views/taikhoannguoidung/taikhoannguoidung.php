<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin tài khoản</h2>
				
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
				  <li class="active">Tài khoản người dùng</li>
				</ol>
			</div>
		</div>
	</section>




<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Tài khoản của tôi</strong></h3>
					</div>
					<div class="prament-area main-input" id="doitk">
						<ul class="panel-group" id="accordion">
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<label>
										<input type="radio" checked value="forever" name="rememberme">
										Thông tin cá nhân
									</label>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="single-log-info">
										<div class="bulling-title">
											
											<div class="custom-input">
												<form action="?action=suataikhoan" method="POST">
													
													<input type="hidden" name="idUser" value="<?php echo $data_taikhoan['idUser'] ?>" required>
													<div class="row">
														<div class="col-md-6">
															<input type="text" name="ho" placeholder="Họ.." value="<?php echo $data_taikhoan['ho'] ?>"  required>
														</div>
														<div class="col-md-6">
															<input type="text" name="ten" placeholder="Tên.." value="<?php echo $data_taikhoan['ten'] ?>"  required>
														</div>
													</div>
													<input type="text" name="email" placeholder="Email.." value="<?php echo $data_taikhoan['email'] ?>" required>
													<input type="text" name="diachi" placeholder="Địa chỉ.." value="<?php echo $data_taikhoan['diachi'] ?>" required >
													<div class="custom-select">

														<select class="form-control" name="gioitinh" title="Giới tính">
															<option  value="Nam" > Nam</option>
															<option value="Nữ"> Nữ</option>
															<option value="Khác"> Khác</option>
														</select>
													</div>
													<input type="text" name="sodienthoai" placeholder="Số điện thoại.." pattern="[0-9]+" minlength="9" value="<?php echo $data_taikhoan['sodienthoai'] ?>"  required/>
													
													<input type="text" name="tendangnhap" placeholder="Tên đăng nhập.." value="<?php echo $data_taikhoan['tendangnhap'] ?>"  required/>
					<!--							<input type="text" name="matkhau" placeholder="Mật khẩu.." pattern="[0-9]+" 
					                                 minlength="5" value="<?php echo $data_taikhoan['matkhau'] ?>"  required/>
					                             -->
													<div class="submit-text">
													<button type="submit">Lưu</button>
													</div>
												</form>
											</div>
										</div>
									</div>
							</li>

<!-- đổi mật khẩu -->


				           <li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
									<label>
										<input type="radio" value="forever" name="rememberme" />
										Đổi mật khẩu
									</label>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="single-log-info">
										<div class="custom-input">
											<form action="#" method="post" onsubmit="return validate()">
												<input type="hidden" name="idUser" value="<?php echo $data_taikhoan['idUser'] ?>">
												<?php $matkhau_md5 = $data_taikhoan['matkhau']; ?>
										        <input id="matkhauchinh" type="hidden" value="<?php echo $matkhau_md5; ?>">
												<input id="mk_ht" type="password" placeholder="Mật khẩu hiện tại .. " name="matkhau" minlength="5">
												<input id="mk" type="password" placeholder="Mật khẩu mới .. " name="matkhaumoi" />
												<input id="nhaplai_mk" type="password" placeholder="Xác nhận lại mật khẩu .." name="xacnhanmatkhau" >
												<div class="submit-text text-left">
													<button type="submit_pw" value="submit form">Lưu</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</li>
						
<!-- end đổi mật khẩu -->	


						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- my account content section end -->


<script>
function validate() {

/*var mkchinh = document.getElementById("matkhauchinh").value; */
var p =document.getElementById("mk_ht").value;
var p1 = document.getElementById("mk").value;
var p2 = document.getElementById("nhaplai_mk").value;

/*
if(mkchinh != p ){
	alert("Bạn đã nhập sai mật khẩu");
	return false;
}
*/
  
if(p1 == "") {
alert("Vui lòng nhập mật khẩu!");
return false;
}
if(p2 == "") {
alert("Vui lòng xác minh mật khẩu!");
return false;
}

if(p1 != p2){
	alert("Mật Khẩu Nhập Lại Không Đúng");
	return false;
} 
  
return true;
}
</script>