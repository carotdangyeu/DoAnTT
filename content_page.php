
<?php 
if(isset($_GET['action']))
	{    $action=$_GET['action'];}
else $action=""; 
if(isset($_GET['content']))
{
	switch ($_GET['content'])
	{
		case "gioithieu":
		include ('gioithieu.php');
		break;
		case "timkiem":
		include ('timkiem.php');
		break;
		case "dangky":
		include ('dangky.php');
		break;
		case "dangnhap":
		include ('dangnhap.php');
		break;
		case "chitietsp":
		include ('chitietsp.php');
		break;
		case "cart":
		include ('cart/index.php');
		break;
		case "lienhe":
		include ('lienhe.php');
		break;
		case "sanpham":
		include ('sanpham.php');
		break;
		break;
		case "tintuc":
		include ('tintuc.php');
		break;
		case "chitiettintuc":
		include ('chitiettintuc.php');
		break;
		case "hethang":
		include ('hethang.php');
		break;
		case "khuyenmai":
		include ('khuyenmai.php');
		break;
	}
}
elseif(isset($_GET['madm'])) {
	$sql = "SELECT * FROM sanpham  WHERE madm='{$_GET['madm']}'";	
	if(isset($GET['madm']))
	{
		$sql.="where madm='".$_GET['madm']."'";
	}
	/*------------Phan trang------------- */
						// Nếu đã có sẵn số thứ tự của trang thì giữ nguyên (ở đây tôi dùng biến $page) 
						// nếu chưa có, đặt mặc định là 1!   

	if(!isset($_GET['page'])){  
		$page = 1;  
	} else {  
		$page = $_GET['page'];  
	}  

						// Chọn số kết quả trả về trong mỗi trang mặc định là 10 
	$max_results = 11;  

						// Tính số thứ tự giá trị trả về của đầu trang hiện tại 
	$from = (($page *  $max_results) - $max_results);  

						// Chạy 1 MySQL query để hiện thị kết quả trên trang hiện tại  

	$sql.=  "LIMIT  $from, $max_results";


	$query=mysqli_query(mysqli_connect("localhost","root"," ","oto"),$sql);
	$total=mysqli_num_rows($query);
	if($total > 0)
	{
		?>

		<section class="product-content clearfix">
			<?php
			$sql1="select tendm from danhmuc where madm='{$_GET['madm']}'";
			$query1=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql1);
			$row=mysqli_fetch_array($query1);
			?>
			<h1 class="title clearfix" style="margin-top:74px; margin-bottom:29px "><span><?php echo $row["tendm"];?></span></h1>
			<div class="product-block product-grid row clearfix">

				<?php 
				$i=1;
				while ($result=mysqli_fetch_array($query))
					{ ?>

						<div class="col-md-3 col-sm-3 col-xs-12 product-resize product-item-box" style=" width: 24%; margin-left: 9px;">
							<div class="product-item">
								<div class="image image-resize">
									<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html">
										<img class="img-responsive" src="Uploads/shop264/images/<?php echo $result['hinhanh'];?>">
									</a>
									<div class="ribbon">
											<?php 
											if($result['khuyenmai1']>0)
											{
											?><span class="hot">-<?php echo $result['khuyenmai1']?>%</span>
										<?php } ?>
									</div>
									<div class="newst-img"><a href="index.php?content=chitietsp&idsp=<?php echo $result['idsp'] ?>"><i class="fa fa-search"></i></a></div>
								</div>
								<div class="right-block">
									<h2 class="name" style="height: 60px;">
										<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html"><?php echo $result['tensp'];?></a>
									</h2>
									<div class="price">
										<span class="price-new"><?php echo number_format(($result['gia']*((100-$result['khuyenmai1'])/100)),0,",",".");?>₫</span>
									</div>
								</div>
								<div class="form-group" align="center">
									<div class="col-sm-offset-4 col-sm-8" style="margin: 0px; width: 100%; ">
										<a href="index.php?content=chitietsp&idsp=<?php echo $result['idsp'] ?>" class="chitiet"><button class="btn btn-default">Chi tiết</button></a>
										<a href="index.php?content=cart&action=add&idsp=<?php echo $result['idsp'] ?>"><button class="btn btn-default">Cho vào giỏ</button></a>
									</div>
								</div>
							</div>
						</div>
						<?php 
						if($i%4==0){
							echo "<div style=\"clear: both;\"></div>";
						}
						$i++;
					} ?>

				</div><!-- End .sanphamcon-->
<?php if($total>$max_results){ ?>
				<div class="phantrang" style="width: 1150px;text-align: center;"">
				<?php 

						// Tính tổng kết quả trong toàn DB:  
				$total_results = mysqli_fetch_array(mysqli_query(mysqli_connect("localhost","root","","oto"),"SELECT COUNT(*) as Num FROM sanpham where madm='{$_GET['madm']}'"));  

						// Tính tổng số trang. Làm tròn lên sử dụng ceil()  
				$total_pages = ceil($total_results[0] / $max_results);  


						// Tạo liên kết đến trang trước trang đang xem 
				if($page > 1){  
					$prev = ($page - 1);  
					echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
				}    
				else{
					echo "<a><button class='trang'>Trang trước</button></a>&nbsp;"; 
				}

				for($i = 1; $i <= $total_pages; $i++){  
					if(($page) == $i){

						echo "$i&nbsp;"; 
					} else {  
						echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
					}  
				}  

						// Tạo liên kết đến trang tiếp theo  
				if($page < $total_pages){  
					$next = ($page + 1);  
					echo "<a href=\"".$_SERVER['PHP_SELF']."?madm=".$_GET['madm']."&page=$next\"><button class='trang'>Trang sau</button></a>";  
				}  
				else{
					echo "<a><button class='trang'>Trang sau</button></a>&nbsp;"; 
				} 	
				?>
				</div>	
			<?php } ?>
				</section>		
				<?php 
			}
			else {echo "Không có sản phẩm nào";}
		}
		else {

			?>




			<!-- <div class="box-html">

				<section class="introduce clearfix">

					<h1>Chào mừng quý khách ghé thăm showroom online của chúng tôi</h1>
					<p>Đến với chúng tôi quý khách sẽ chọn được những chiếc xe ưng ý và những 
						dịch vụ tốt nhất mà chúng tôi mang lại.</p>
					<img src="Uploads/shop264/images/article/banner_menu-15216166.png" alt="car"
					class="img-responsive center-block featured-image">

				</section>

			</div> -->

			<section class="product-content clearfix" style="margin-top:55px;">
				<h1 class="title clearfix"><span>DÒNG XE BÁN CHẠY</span></h1>
				<div class="product-block product-grid row clearfix">
					<?php 
					$sql1="select * from sanpham inner join danhmuc on sanpham.madm = danhmuc.madm where dequi=1 order by daban  DESC limit 4 ";
					$result1= mysqli_query(mysqli_connect("localhost","root","","oto"),$sql1);
					?>
					<?php 
					$i=1;
					while ($row=mysqli_fetch_array($result1))
						{ ?>

							<div class="col-md-3 col-sm-3 col-xs-12 product-resize product-item-box" style=" width: 24%; margin-left: 9px;">
								<div class="product-item">
									<div class="image image-resize">
										<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html">
											<img id="img-sp" class="img-responsive" src="Uploads/shop264/images/<?php echo $row['hinhanh'];?>">
										</a>
										<div class="ribbon">
											<span class="hot">Hot</span>
										</div>
										<div class="newst-img"><a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>"><i class="fa fa-search"></i></a></div>
									</div>
									<div class="right-block">
									<h2 class="name" style="height: 60px;">
										<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html"><?php echo $row['tensp'];?></a>
									</h2>
									<div class="price">
										<span class="price-new"><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?>₫</span>
									</div>
								</div>
									<div class="form-group" align="center">
										<div class="col-sm-offset-4 col-sm-8" style="margin: 0px; width: 100%; ">
											<a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>" class="chitiet"><button class="btn btn-default">Chi tiết</button></a>
											<a href="index.php?content=cart&action=add&idsp=<?php echo $row['idsp'] ?>"><button class="btn btn-default">Cho vào giỏ</button></a>
										</div>
									</div>
								</div>
							</div>
							<?php 
							if($i%4==0){
								echo "<div style=\"clear: both;\"></div>";
							}
							$i++;
						} ?>
					</div>

					<!-- --------------------------------------SLIDE---------------------------------------- -->
					<div id="wowslider-container0">
						<div class="ws_images"><ul>
							<li><img src="slide/data0/images/slider1.png" title="slider-1" id="wows0_0"/></li>
							<li><img src="slide/data0/images/slider2.png" title="slider-2" id="wows0_1"/></li>
							<li><img src="slide/data0/images/slider3.png" title="slider-3" id="wows0_2"/></li>
						</ul></div>
					</div>	
					<script type="text/javascript" src="slide/engine0/wowslider.js"></script>
					<script type="text/javascript" src="slide/engine0/script.js"></script>
					<!-- ----------------------------------------------------------------------------------- -->

					<div class="box-html">

						<section class="introduce clearfix">

							<h1>Chào mừng quý khách ghé thăm showroom online của chúng tôi</h1>
							<p>Đến với chúng tôi quý khách sẽ chọn được những chiếc xe ưng ý và những 
								dịch vụ tốt nhất mà chúng tôi mang lại.</p>
							<img src="Uploads/shop264/images/article/banner_menu-15216166.png" alt="car"
							class="img-responsive center-block featured-image">

						</section>

					</div>

					<h1 class="title clearfix"><span>DÒNG XE MỚI</span></h1>

					<div class="product-block product-grid row clearfix">
						<?php 
						$sql1="select * from sanpham inner join danhmuc on sanpham.madm = danhmuc.madm where dequi=1 order by idsp  DESC limit 4 ";
						$result1= mysqli_query(mysqli_connect("localhost","root","","oto"),$sql1);
						?>
						<?php 
						$i=1;
						while ($row=mysqli_fetch_array($result1))
							{ ?>

								<div class="col-md-3 col-sm-3 col-xs-12 product-resize product-item-box" style=" width: 24%; margin-left: 9px;">
									<div class="product-item">
										<div class="image image-resize">
											<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html">
												<img class="img-responsive" src="Uploads/shop264/images/<?php echo $row['hinhanh'];?>">
											</a>
											<div class="ribbon">
												<span class="hot">New</span>
											</div>
											<div class="newst-img"><a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>"><i class="fa fa-search"></i></a></div>
										</div>
										<div class="right-block">
									<h2 class="name" style="height: 60px;">
										<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html"><?php echo $row['tensp'];?></a>
									</h2>
									<div class="price">
										<span class="price-new"><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?>₫</span>
									</div>
								</div>
										<div class="form-group" align="center">
											<div class="col-sm-offset-4 col-sm-8" style="margin: 0px; width: 100%; ">
												<a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>" class="chitiet"><button class="btn btn-default">Chi tiết</button></a>
												<a href="index.php?content=cart&action=add&idsp=<?php echo $row['idsp'] ?>"><button class="btn btn-default">Cho vào giỏ</button></a>
											</div>
										</div>
									</div>
								</div>
								<?php 
								if($i%4==0){
									echo "<div style=\"clear: both;\"></div>";
								}
								$i++;
							} ?>
						</div>
					</section>
				<?php } ?>

