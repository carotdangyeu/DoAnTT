<div class="main">
	<div class="container">
		<div class="row" style="padding-left: 10px; margin-top: 25px;">
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
							<li class="icon-li"><strong>Đăng nhập</strong> </li>
						</ul>
					</div>
					<script type="text/javascript">
						$(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
					</script>
					<script src="app/services/accountServices.js"></script>
					<script src="app/controllers/accountController.js"></script>
					<div class="login-content clearfix" ng-controller="accountController" ng-init="initController()">
						<h1 class="title"><span>Đăng nhập hệ thống</span></h1>

						<div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
							<form class="form-horizontal" action="update_dangnhap.php" method="post" name="frm" onsubmit="return dangky()">
								<div class="form-group">
									<label for="Email" class="col-sm-4 control-label">Tên đăng nhập</label>
									<div class="col-sm-8">
										<input type="text" name="user" class="form-control"></td>
									</div>
								</div>
								<div class="form-group">
									<label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
									<div class="col-sm-8">
										<input type="password" name="pass" class="form-control"></td>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-4 col-sm-8">
										<button type="submit" class="btn btn-default" name="login">Đăng nhập</button>
										<a href="index.php?content=dangnhap">Quên mật khẩu</a>
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
			if(frm.user.value.=="")
			{
				alert("Bạn chưa nhập tên đăng nhập");
				frm.user.focus();
				return false;	
			}
			if(frm.pass.value=="")
			{
				alert("Bạn chưa nhập password");	
				frm.pass.focus();
				return false;
			}
		}
	</script>