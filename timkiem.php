<section class="product-content clearfix" style="margin-top:73px;">
	<div class="breadcrumb clearfix" style="padding-left: 10px;">
		<ul>
			<li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
				<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
			</li>
			<li class="icon-li"><strong>Sản phẩm</strong> </li>
		</ul>
	</div>

	<?php

	if(isset($_GET['timkiem']))
	{
		$tim=$_GET['timkiem'];
		switch($_GET['gia'])
		{
			case "1":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%' and (gia between '0' and '100000000')";	
			break;
			case "2":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '100000000' and '300000000')";	
			break;
			case "3":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '300000000' and '500000000')";	
			break;
			case "4":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '500000000' and '800000000')";	
			break;
			case "5":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '800000000' and '1000000000')";	
			break;
			case "6":
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia >= '1000000000')";	
			break;
			default:
			$sql="select * FROM sanpham WHERE tensp like '%".$tim."%' ";	
			break;
		}

		if(!isset($_GET['page'])){  
			$page = 1;  
		} else {  
			$page = $_GET['page'];  
		} 
		$rows=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
		$tong=mysqli_num_rows($rows);


		$max_results = 12;  
		$from = (($page * $max_results) - $max_results);  

		$sql.=  "LIMIT $from, $max_results";
		$rows=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
		if($tong<0)
			echo"Không tìm được sản phẩm nào";
		else
		{
			?>
			<h1 class="title clearfix" style="margin:0px"><span>Từ khóa <font color="yellow"><b><?php echo $tim ?></b></font> : có <?php echo $tong?> kết quả </span></h1>

			<div class="product-block product-grid row clearfix">

				<?php 
			}



			$i=1;
			while($row=mysqli_fetch_array($rows))
				{ ?>
					<div class="col-md-3 col-sm-3 col-xs-12 product-resize product-item-box" style=" width: 24%; margin-left: 9px; margin-top: 30px;">
						<div class="product-item">
							<div class="image image-resize">
								<a href="san-pham/ao-cong-so-tay-bup-sang-trong.html">
									<img  class="img-responsive" src="Uploads/shop264/images/<?php echo $row['hinhanh'];?>">
								</a>
								<div class="ribbon">
									<?php 
									if($row['khuyenmai1']>0)
									{
									?><span class="hot">-<?php echo $row['khuyenmai1']?>%</span>
								<?php } ?>
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
		<?php if($tong>$max_results){ ?>
		<div class="phantrang" style="width: 1150px;text-align: center;"">
		<?php 

						// Tính tổng kết quả trong toàn DB:  

						// Tính tổng số trang. Làm tròn lên sử dụng ceil()  
		$total_pages = ceil($tong / $max_results);  


						// Tạo liên kết đến trang trước trang đang xem 
		if($page > 1){  
			$prev = ($page - 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?content=timkiem&timkiem=&gia=".$_GET['gia']."&page=$prev\"><button class='trang'>Trang trước</button></a>&nbsp;";  
		}    
		else{
			echo "<a><button class='trang'>Trang trước</button></a>&nbsp;"; 
		}

		for($i = 1; $i <= $total_pages; $i++){  
			if(($page) == $i){

				echo "$i&nbsp;"; 
			} else {  
				echo "<a href=\"".$_SERVER['PHP_SELF']."content=timkiem&timkiem=&gia=".$_GET['gia']."&page=$i\"><button class='so'>$i</button></a>&nbsp;";  
			}  
		}  

						// Tạo liên kết đến trang tiếp theo  
		if($page < $total_pages){  
			$next = ($page + 1);  
			echo "<a href=\"".$_SERVER['PHP_SELF']."?content=timkiem&timkiem=&gia=".$_GET['gia']."&page=$next\"><button class='trang'>Trang sau</button></a>";  
		}  
		else{
			echo "<a><button class='trang'>Trang sau</button></a>&nbsp;"; 
		} 	
		?>
		</div>

		<?php 
	}	
	}
	?>
	</section>