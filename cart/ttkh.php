<div class="adv">
	<div class="container">
		<div class="row" style="margin-top: 72px; padding-left:10px">
			<div class="col-md-12">

				<div class="breadcrumb clearfix">
					<ul>
						<li>
							<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
						</li>
						<li>
							<a title="Quay lại giỏ hàng" href="index.php?content=cart" itemprop="url"><span itemprop="title">Giỏ hàng</span></a>
						</li>
						<li class="icon-li"><strong>Thanh toán</strong> </li>
					</ul>
				</div>
				<script type="text/javascript">
					$(".link-site-more").hover(function() {
						$(this).find(".s-c-n").show();
					}, function() {
						$(this).find(".s-c-n").hide();
					});
				</script>
			</div>
		</div>
	</div>
</div>
<div class="register-content clearfix" style="width: 500px;margin: auto;">
	<h1 class="title"><span>Thanh toán</span></h1>
	<form class="form-horizontal" action="index.php?content=cart&action=insert" method="POST" id="a" onsubmit="return kiemtra();">
		<?php
		if (isset($_SESSION['idnd'])) {


			$sql = mysqli_query(mysqli_connect("localhost", "root", "", "oto"), "select * from nguoidung where idnd='" . $_SESSION['idnd'] . "'");
			$row = mysqli_fetch_array($sql);
		
		?>
		<h2><span>Thông tin khách hàng</span></h2>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Tên khách hàng<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="hoten" class="form-control" value="<?php echo $row['tennd'] ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Địa chỉ giao hàng<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="diachi" class="form-control" value="<?php echo $row['diachi'] ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Điện thoại<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="dienthoai" class="form-control" value="<?php echo $row['dienthoai'] ?>" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Phương thức<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" required="true" />
			</div>
		</div>

	<?php }
	else{
	 ?>
<h2><span>Thông tin khách hàng</span></h2>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Tên khách hàng<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="hoten" class="form-control" value="" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Địa chỉ giao hàng<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="diachi" class="form-control" value="" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Điện thoại<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="text" name="oto" class="form-control" value="" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
			<div class="col-sm-9">
				<input type="email" name="email" class="form-control" value=""   />
			</div>
		</div>
	<?php } ?>
		<h2><span>Phương thức thanh toán</span></h2>
		<div class="form-group">
			<label for="" class="col-sm-3 control-label">Phương thức<span class="warning">(*)</span></span></label>
			<div class="col-sm-9">
				<select name="phuongthuc" class="form-control">
					<option value="">Chọn phương thức thanh toán</option>
					<option value="1">Qua bưu điện</option>
					<option value="2">Qua thẻ ATM</option>
					<option value="3">Thanh toán trực tiếp</option>
				</select>
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-default">Đặt hàng</button>
			</div>
		</div>
	</form>
</div>
<script language="javascript">
	function kiemtra() {
		if (a.hoten.value == "") {
			alert("Bạn chưa điền tên")
			a.hoten.focus();
			return false;

		}

		if (a.oto.value == "") {
			alert("Bạn chưa điền SĐT<br> Hãy điền số điện thoại để chúng tôi liên lạc lại với bạn")
			a.oto.focus();
			return false;
		}
		if (a.diachi.value == "") {
			alert("Bạn chưa điền địa chỉ")
			a.diachi.focus();
			return false;
		}
		if (a.email.value == "") {
			alert("Bạn chưa điền email")
			a.email.focus();
			return false;
		}
		if (a.phuongthuc.value == "") {
			alert("Bạn chưa chọn phuong thức thanh toán")
			a.phuongthuc.focus();
			return false;
		}

	}
</script>