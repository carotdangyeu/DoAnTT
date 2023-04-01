	<?php 
	$idsp=$_GET['idsp'];
	$rows=mysqli_query(mysqli_connect("localhost","root","","oto"),"select * from sanpham where idsp=$idsp");
	while ($row=mysqli_fetch_array($rows))
	{
		?>

		<div class="product-detail clearfix relative">
			<!--Begin-->
			<div class="product-block clearfix">
				<div class="row" style="margin-top: 70px; padding-left:10px;height: 1000px;">
					<div class="col-md-6 col-sm-6 col-xs-12 product-image clearfix" style="width: 320px;">

						<div class="sp-wrap" style="width: 300px;">
							<a href=""><img class="img-responsive" src="Uploads/shop264/images/<?php echo $row['hinhanh'] ?>"></a>
						</div> 
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 clearfix" style="width: 540px;">
						<h1><?php echo $row['tensp'] ?></h1>
						<div class="price">
							
							<div ng-if="IsPromotion==false"><span class="price-new"><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?>đ</span></div>

						</div>
						<div class="price">
							<?php 
							$dem = $row['soluong'] - $row['daban'];
							if( $dem >0)
								echo "<span class=\"product-code\">Số sản phẩm còn: ".$dem."</span>";

							else 
								echo "<span class=\"product-code\">Hết hàng</span>";
							?>
						</div>
						<div class="des">

							Thương hiệu Nhật Bản đã nhanh chóng giới thiệu thế hệ hoàn toàn mới của Honda HR-V 2022 với nhiều thay đổi cách mạng với hy vọng sẽ khiến
						 khách hàng Việt “yêu lại từ đầu”. Giá <?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?> VNĐ
 
						</div>

						<form action="index.php?content=cart&action=add&idsp=<?php echo $row['idsp'] ?>" method="post">
							<div class="quantity clearfix">
								<label>Số lượng</label>
								<div class="quantity-input">
									<input type="number" name="soluongmua"  value="1" class="text"/>
								</div>
							</div>
							<div class="button" style="text-align: left;">
								<?php 
								if($dem <=0)
									echo "<div class=\"button\" >
								<a href=\"index.php?content=hethang\" class=\"btn btn-default\"><i class=\"glyphicon glyphicon-shopping-cart\"></i>Thêm giỏ hàng</a>
								</div>";
								else { ?>
									<input class="btn btn-default" type="submit" value="Cho vào giỏ" name="chovaogio" class="inputmuahang" />
								<?php } ?>
							</div>
						</form>


					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 clearfix" style="position: absolute;right: 0px;">

						<div class="box-sale-policy" ng-controller="moduleController" ng-init="initSalePolicyController('Shop')">
							<h3><span>Chính sách bán hàng</span></h3>
							<div class="sale-policy-block">
								<ul>
									<li>Giao hàng TOÀN QUỐC</li>
									<li>Thanh toán khi nhận hàng</li>
									<li>Đổi trả trong <span>15 ngày</span></li>
									<li>Hoàn ngay tiền mặt</li>
									<li>Chất lượng đảm bảo</li>
									<li>Miễn phí vận chuyển:<span> Đơn hàng từ 3 món trở lên</span></li>
								</ul>
							</div>
							<div class="buy-guide">
								<h3>Hướng Dẫn Mua Hàng</h3>
								<ul>
									<li>
										Mua hàng trực tiếp tại website
										<b> http://www.runtime.vn</b>
									</li>
									<li>
										Gọi điện thoại <strong>
											0908 77 00 95
										</strong> để mua hàng
									</li>
									<li>
										Mua tại Trung tâm CSKH:<br />
										<strong>5/12A Quang Trung, P.14, Q.Gò Vấp, Tp.HCM</strong>
										<a href="../ban-do.html" rel="nofollow" target="_blank">Xem Bản Đồ</a>
									</li>
									<li>
										Mua sỉ/buôn xin gọi <strong>
											0908 77 00 95
										</strong> để được
										hỗ trợ.
									</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="product-tabs" style="width: 850px; padding-left: 10px;">
						<div class="name">
							<ul class="nav nav-tabs">
								<li role="presentation" >
									<a href="javascript:void(0)" class="ng-binding">Chi tiết sản phẩm</a>
								</li>
								<li role="presentation" >
									<a href="javascript:void(0)" class="ng-binding">Bình luận</a>
								</li>
							</ul>

						</div>

						<div class="tab-content">
							<div class="fade in" >
								<h3 class="sub-title">Chi tiết sản phẩm</h3>
								<div  class="ng-binding"><div>
								Điểm nổi bật</div>
								<div>
								- Honda HR-V được thiết kế đơn giản, nhưng không kém phần tinh tế, cách điệu, đẹp mắt.</div>
								<div>
								- Chiếc B-SUV này được sử dụng những họa tiết hình kim cương mạ crom mang đến phong cách mới táo bạo cho xe</div>
								<div>
								Có những tùy chọn màu sắc gồm: Trắng bạc thời trắng (bản RS), Trắng ngọc trai, Đỏ cá tính, Xám phong cách, Đen ánh độc tôn.</div>
								<div>
								- Trọng lượng xe: 1.830kg</div>
								<div>
								&nbsp;</div>
								<div>
								Điều kiện</div>
								<div>
								- Giao sản phẩm theo màu đến tận tay khách hàng.</div>
								<div>
								+ Đối với khu vực TP.HCM: Miễn phí.</div>
								<div>
								- Màu sắc: Trắng bạc thời trắng (bản RS), Trắng ngọc trai, Đỏ cá tính, Xám phong cách, Đen ánh độc tôn.</div>
								<div>
								- Khách hàng không bù thêm tiền khi nhận sản phẩm.</div>
								<div>
								- Khách hàng vui lòng kiểm tra sản phẩm trước khi nhận hàng, Hotdeal không chịu trách nhiệm đổi trả sản phẩm sau khi giao hàng.</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
<?php } ?>



