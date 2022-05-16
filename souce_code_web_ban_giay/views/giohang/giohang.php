
	
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ hàng của bạn</h2>
				</div>
			</div>
		</div>
	</div>
</div>



	<section id="cart_items"  style="margin-top: -50px; margin-bottom: -50px;">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

<!-- &a=?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?> -->
		<form action="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?>" method="POST">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="width: 150px;">Sản Phẩm</td>
							<td class="description">Thông Tin sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">SL mua</td>
							<td class="quantity">SL trong Kho</td>
							<td class="total">Thành Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody class="tbody">

					<?php	if(isset($_SESSION['sanpham'])){
						        $_SESSION['tongtien'] = 0;
					   foreach ($_SESSION['sanpham'] as $key=>$value) { ?>   <!-- $key là id sp -->
						<tr>
							<td class="cart_product">
								<img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $key.$value['tenSP'] ?></a></h4>
								<p> </p> 
							</td>
							<td class="cart_price">
								<p><?= $value['Dongia'] ?>.000 VND</p>
							</td>
							<td class="cart_quantity">

                                
                                <div class="cart_quantity_button">
                                	<?php
                                	if($value['soluong_kho'] >0 ){ ?>
									<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
								<?php }else{ ?>
                                     <a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
									<?php } ?>
                                      <input class="cart_quantity_input" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
                                     <a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>

								</div>



		 					</td>
		 					<td style="width: 150px; text-align: center;font-weight: bold;font-size: 20px;color: orange;">
		 							<?php 
		 							if($value['soluong_kho'] < 0){
		 								echo "Lỗi";
		 							}else{
		 							echo $value['soluong_kho']; 
		 						}
		 							?>
		 					</td>


							<td class="cart_total" style="text-align: center;">
								<p class="cart_total_price"><?php $_SESSION['tongtien'] += $value['thanhtien']; echo $value['thanhtien'].'.000 VND'; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>"><i class="fa fa-times"></i></a>
							</td>
							
						</tr>
             <?php } }?>

                         <tr>
                         	<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td style="font-size: 20px; color:orange; font-weight: bold; padding: 10px;">
								Tổng Tiền: <?php 
								if(isset($_SESSION['tongtien'])){
								echo $_SESSION['tongtien'].'.000 VND';
							}else{
								echo "";
							}
								?>
							</td>
							<td>
							</td>
                         </tr>

						
					</tbody>
				</table>


                
				<a href="?action=giohang&act=xoagiohang_all" class="pull-right" style="padding: 30px; padding-bottom: 100px;">
				   Hủy giỏ hàng <i class="fa fa-times"></i>
				</a>
			    <div style="padding: 30px; padding-bottom: 100px;">
			    <input class="pull-right" type="submit" value="Xác Nhận Giỏ Hàng">
			    </div> 
</form>

			</div>
		</div>
	</section> <!--/#cart_items-->




<script>
   function TB_hethang() {
       alert("Sản phẩm trong kho đã hết!");
}
 </script>


    