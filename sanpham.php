<section class="product-content clearfix" style="margin-top:55px;">
	<div class="breadcrumb clearfix" style="padding-left: 10px;">
		<ul>
			<li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
				<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
			</li>
			<li class="icon-li"><strong>Sản phẩm</strong> </li>
		</ul>
	</div>

	<?php 
	$sql="select * from danhmuc where dequi=1 order by madm";
	$result=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);


	while($row=mysqli_fetch_array($result))
	{ 
		$sql1="select * from sanpham where madm={$row['madm']} order by idsp  LIMIT 0,4";
		$kq=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql1);
		$dem = mysqli_num_rows($kq);
		if($dem>0)
		{
			?>

			<h1 class="title clearfix" style="margin:0px"><span><?php echo $row["tendm"];?></span></h1>
			
			<div style="width: 100%; text-align: right;">
				<p><a href="index.php?madm=<?php echo $row['madm']?>">Xem thêm<span class="xemthem"></span></a></p>
			</div>

			<div class="product-block product-grid row clearfix">

				<?php 
			}
			$i=1;
			while($rows=mysqli_fetch_array($kq))
				{ ?>
					<div class="col-md-3 col-sm-3 col-xs-12 product-resize product-item-box" style=" width: 24%; margin-left: 9px;">
						<div class="product-item">
							<div class="image image-resize">
								<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html">
									<img  class="img-responsive" src="Uploads/shop264/images/<?php echo $rows['hinhanh'];?>">
								</a>
								<div class="ribbon">
									<?php 
									if($rows['khuyenmai1']>0)
									{
									?><span class="hot">-<?php echo $rows['khuyenmai1']?>%</span>
								<?php } ?>
							</div>
							<div class="newst-img"><a href="index.php?content=chitietsp&idsp=<?php echo $rows['idsp'] ?>"><i class="fa fa-search"></i></a></div>
						</div>
						<div class="right-block">
									<h2 class="name" style="height: 60px;">
										<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html"><?php echo $rows['tensp'];?></a>
									</h2>
									<div class="price">
										<span class="price-new"><?php echo number_format(($rows['gia']*((100-$rows['khuyenmai1'])/100)),0,",",".");?>₫</span>
									</div>
								</div>
						<div class="form-group" align="center">
							<div class="col-sm-offset-4 col-sm-8" style="margin: 0px; width: 100%; ">
								<a href="index.php?content=chitietsp&idsp=<?php echo $rows['idsp'] ?>" class="chitiet"><button class="btn btn-default">Chi tiết</button></a>
								<a href="index.php?content=cart&action=add&idsp=<?php echo $rows['idsp'] ?>"><button class="btn btn-default">Cho vào giỏ</button></a>
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
	<?php }?>
</section>