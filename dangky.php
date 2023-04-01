
<div class="main">
	<div class="container">
		<div class="row" style="padding-left: 10px; margin-top: 8px;">
			<div class="col-md-3">
				<div class="menu-account">
					<h3>
						<span>
							Tài khoản
						</span>
					</h3>
					<ul>
						<li><a href="index.php?content=dangnhap"><i class="fa fa-sign-in"></i>Đăng nhập</a></li>
						<li><a href="index.php?content=dangky"><i class="fa fa-key"></i>Đăng ký</a></li>
						<li><a href="index.php?content=dangnhap"><i class="fa fa-key"></i>Quên mật khẩu</a></li>
					</ul>
				</div>                    </div>
				<div class="col-md-9">

					<div class="breadcrumb clearfix">
						<ul>
							<li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
								<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
							</li>
							<li class="icon-li"><strong>Đăng ký tài khoản</strong> </li>
						</ul>
					</div>
					<script type="text/javascript">
						$(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
					</script>
					<script src="app/services/accountServices.js"></script>
					<script src="app/controllers/accountController.js"></script>
					<div class="register-content clearfix" ng-controller="accountController" ng-init="initRegisterController()">
						<h1 class="title"><span>Đăng ký tài khoản</span></h1>

						<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
							<form class="form-horizontal" action="update_dangky.php" method="post" name="frm" onsubmit="return dangky()">
								<h2><span>Thông tin tài khoản</span></h2>
								<div class="form-group">
									<label for="Code" class="col-sm-3 control-label">Tài khoản<span class="warning">(*)</span></label>
									<div class="col-sm-9">
										<input type="text" name="user" class="form-control" ng-model="Code" required="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="Email" class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
									<div class="col-sm-9">
										<input type="email" name="email" class="form-control" ng-model="Email" required="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="Password" class="col-sm-3 control-label">Mật khẩu<span class="warning">(*)</span></label>
									<div class="col-sm-9">
										<input type="password" name="pass"  class="form-control" ng-model="Password" required="true" />
									</div>
								</div>
								<div class="form-group">
									<label for="RePassword" class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
									<div class="col-sm-9">
										<input type="password" name="pass1" class="form-control" ng-model="RePassword" />
									</div>
								</div>
								<h2>Thông tin cá nhân</h2>
								<div class="form-group">
									<label for="Name" class="col-sm-3 control-label">Họ tên<span class="warning">(*)</span></label>
									<div class="col-sm-9">
										<input type="text" name="tennd"  class="form-control" ng-model="Name" required="true" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Giới tính</label>
									<div class="col-sm-9">
										<select class="form-control" name="gioitinh">
											<option value="nam">Nam</option>
											<option value="nu">Nữ</option>
										</select>
									</div>
								</div>
								<div class="form-group form-inline">
									<label class="col-sm-3 control-label">Ngày sinh</label>
									<div class="col-sm-9">
										<input class="form-control"  type="date" name="ngaysinh">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Điện thoại</label>
									<div class="col-sm-9">
										<input type="text" name="dienthoai" class="form-control" ng-model="Phone" />
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Địa chỉ</label>
									<div class="col-sm-9">
										<input type="text" name="diachi" class="form-control" ng-model="Address" />
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-8">
										<button type="submit" name="submit" class="btn btn-default">Đăng ký</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script language="javascript">
		function  dangky()
		{
			if(frm.tennd.value=="")
			{
				alert("Bạn chưa nhập tên. Vui lòng kiểm tra lại");
				frm.tennd.focus();
				return false;   
			}
			if(frm.tennd.value.length<6)
			{
				alert("Tên quá ngắn. Vui lòng điền đầy đủ tên");
				frm.tennd.focus();
				return false;   
			}
			if(frm.user.value=="")
			{
				alert("Bạn chưa nhập tên đăng nhập . Vui lòng kiểm tra lại");
				frm.user.focus();
				return false;   
			}
			if(frm.user.value.length<6)
			{
				alert("Tên đăng nhập phải lớn hơn 6 ký tự");
				frm.user.focus();
				return false;   
			}
			if(frm.pass.value=="")
			{
				alert("Bạn chưa nhập password");    
				frm.pass.focus();
				return false;
			}
			if(frm.pass.value.length<8)
			{
				alert("Mật khẩu phải lớn hơn 8 ký tự"); 
				frm.pass.focus();
				return false;
			}
			dt=/^[0-9]+$/;
			oto=frm.oto.value;
			if(!dt.test(oto))
			{
				alert("Bạn chưa nhập điện thoại. Vui lòng kiểm tra lại.");
				frm.oto.focus();
				return false;
			}
			dd=frm.oto.value;
			if(10>dd.length || dd.length>11)
			{
				alert("Số điện thoại không đủ độ dài. Vui lòng nhập lại");
				frm.oto.focus();
				return false;   
			}
			if(frm.email.value=="")
			{
				alert("Bạn chưa nhập email");   
				frm.email.focus();
				return false;
			}
			mail=frm.email.value;
			m=/^([A-z0-9])+[@][a-z]+[.][a-z]+[.]*([a-z]+)*$/;
			if(!m.test(mail))
			{
				alert("Bạn nhập sai email");    
				frm.email.focus();
				return false;
			}

			if(frm.pass1.value=="")
			{
				alert("Bạn chưa nhập lại password");    
				frm.pass1.focus();
				return false;
			}
			mk=frm.pass.value;
			mk1=frm.pass1.value;
			if(mk!=mk1)
			{
				alert("Password chưa đúng");    
				frm.pass1.focus();
				return false;
			}
		}
	</script>