<base href="http://localhost:81/cua-hang-oto/" />
<?php 
session_start();
include("include/connect.php");?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js">
<head>
	<html xmlns:fb="http://ogp.me/ns/fb#">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> CÔNG TY TNHH RUNTIME </title>
	<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<link rel="stylesheet" style="style/sheet" href="css/index.css">


	<link rel="stylesheet" style="style/sheet" href="css/style1.css">
	<script language="javascript" type="text/javascript" src="js/jquery.easing.js"></script>
	<script language="javascript" type="text/javascript" src="js/script.js"></script>

	<!-- ----------------------------------------------------------------------------------- -->


	<script src="new/Scripts/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="new/Scripts/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="new/Scripts/bootstrap/js/bootstrap.min.js"></script>
	<script src="new/Scripts/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>

	<script src="new/Scripts/common/fix-height.js" data-img-box=".image-resize" type="text/javascript"></script>
	<script src="new/Scripts/common/common.js" type="text/javascript"></script>
	<script src="new/Scripts/common/jquery.cookie.js" type="text/javascript"></script>
	<script src="new/Scripts/common/mycard.js" type="text/javascript"></script>
	<script src="new/Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>

	<script src="new/Scripts/angularJS/angular.min.js"></script>
	<script src="new/Scripts/angularJS/angular-sanitize.min.js"></script>
	<script type="text/javascript" src="new/Scripts/angular-loading-spinner/spin.min.js"></script>
	<script type="text/javascript" src="new/Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
	<script type="text/javascript" src="new/Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
	<script src="app/appMain.js"></script>
	<script src="app/directives/directive.js"></script>
	<script src="app/directives/angular-summernote.js"></script>
	<script src="app/directives/paging.js"></script>
	<script src="app/services/ajaxServices.js"></script>
	<script src="app/services/alertsServices.js"></script>

	<script src="new/Scripts/jQuery/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="new/Scripts/jQuery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="new/Scripts/bootstrap/js/bootstrap.min.js"></script>
	<script src="new/Scripts/jQuery-ui/jquery-ui.min.js" type="text/javascript"></script>

	<link href="new/Scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="new/App_Themes/Home/font-awesome.min.css" rel="stylesheet" />
	<link href="new/App_Themes/Home/common.css" rel="stylesheet" type="text/css" />
	<link href="new/App_Themes/Home/animate.css" rel="stylesheet" type="text/css" />
	<link href="new/Scripts/jQuery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<link href="new/static.runtime.vn/App_Themes/RUN041/style.css" rel="stylesheet" type="text/css" />
	<link href="new/static.runtime.vn/App_Themes/RUN041/responsive.css" rel="stylesheet" type="text/css" />
	<!-- ----------------------------------------------------------------------------------- -->


	<!-- --------------------------------------SLIDE---------------------------------------- -->
	<link rel="stylesheet" type="text/css" href="slide/engine0/style.css" />
	<script type="text/javascript" src="slide/engine0/jquery.js"></script>
	<!-- ----------------------------------------------------------------------------------- -->

</head>
<body style="background:white">

	<!-- ----------------------------------------------------------------------------------- -->

	<div id="wapper" style="width: 1152px;min-height: 370px;">
		<div>
			<div id="menu-header">
				<?php include("home_include/menu_ngang.php"); ?>
			</div>
		</div><!-- End .header -->

		<div class="product-block product-grid clearfix" >
			<?php include("content_page.php"); ?>
		</div>
	</div>
	
	<script src="new/Scripts/common/login.js" type="text/javascript"></script>
	<section class="top-link clearfix">
		<div class="container" style="width: 1150px; padding: 0px;">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav navbar-nav topmenu-contact pull-left">
						<li><i class="fa fa-phone"></i> <span>Hotline:0862 812 776</span></li>
					</ul>

					<ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
						<li class="order-cart"><a href="index.php?content=cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						<?php if(isset( $_SESSION['username'])){
							?>
							<li class="order-cart" style="color: white;">
								Xin chào: <span style="font-weight: bold; color: #f0d015;"> <?php echo $_SESSION['username'] ?> </span>
							</li> 
							<li class="order-cart" style="color: white;">&nbsp;&nbsp;| </li> 
							<li class="order-cart">
								<a href="logout.php">Logout</a>
							</li>

							<?php 
						}
						else{
							?>
							<li class="account-login"><a href="index.php?content=dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
							<li class="account-register"><a href="index.php?content=dangky"><i class="fa fa-key"></i> Đăng ký </a></li>
						<?php } ?>


					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- ----------------------------------------------------------------------------------- -->

	<div id="wapper" style="width: 1152px;min-height: 370px;">
		<div>
			<div id="menu-header">
				<?php include("home_include/menu_ngang.php"); ?>
				
				<ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
						<li class="order-cart"><a href="index.php?content=cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
						<?php if(isset( $_SESSION['username'])){
							?>
							<li class="order-cart" style="color: white;">
								Xin chào: <span style="font-weight: bold; color: #f0d015;"> <?php echo $_SESSION['username'] ?> </span>
							</li> 
							<li class="order-cart" style="color: white;">&nbsp;&nbsp;| </li> 
							<li class="order-cart">
								<a href="logout.php">Logout</a>
							</li>

							<?php 
						}
						else{
							?>
							<li class="account-login"><a href="index.php?content=dangnhap"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
							<li class="account-register"><a href="index.php?content=dangky"><i class="fa fa-key"></i> Đăng ký </a></li>
						<?php } ?>


					</ul>
				
			</div>
		</div><!-- End .header -->

		<div class="product-block product-grid clearfix" >
			<?php include("content_page.php"); ?>
		</div>
	</div>



	<div >
		<?php include("footer.php"); ?>
	</div>


	<button id="myBtn" title="Lên đầu trang">
		<a class="back-to-top" style="display: inline;">
        <i class="fa fa-angle-up">
        </i>
    </a>
	</button>
	<script>
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {

			if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		document.getElementById('myBtn').addEventListener("click", function(){
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		});
	</script>
</body>
