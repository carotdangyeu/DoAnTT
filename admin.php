﻿<?php 
session_start();
if(!isset($_SESSION['username'])   or ($_SESSION['phanquyen']==1))
{

	header('location:login.php');
	exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript" src="ckeditor/ckeditor.js"></script>
	<title> Admin </title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<?php 
include("../include/connect.php");
?>
<body>
	<div id="wapper">
		<div id="content">
			<div id="top-content">
				<p>Chào bạn <font color="green" ><b><?= $_SESSION['username']?></b></font> |<a href="logout.php"> Thoát</a></p>
			</div>
			<div id="main-content">
				<div id="left-content">
					<div class="danhmucsp">
						<div class="center">
							<h4>Quản lý</h4>
							<ul>
								<li><a href="admin.php">Trang chủ</a></li>
								<li><a href="?admin=hienthisp"> Quản lý sản phẩm</a></li>
								<li><a href="?admin=hienthidm"> Quản lý danh mục</a></li>
								<li><a href="?admin=hienthihd"> Quản lý đơn hàng</a></li>
								<li><a href="?admin=hienthind"> Quản lý người dùng</a></li>
								<li><a href="?admin=hienthiht"> Quản lý liên hệ</a></li>
							</ul>
						</div><!-- End .center -->
					</div>	<!-- End .menu-left -->
				</div><!-- End .left-content -->
				<!---------------- Hiển trị content-admin------------------->


				<div id="center-content">
					<?php
					include("content_admin.php");
					?>
				</div>
			</div><!-- End .main-content -->
		</div><!-- End .content -->

	</div><!-- End .wapper -->
</body>
</html>
