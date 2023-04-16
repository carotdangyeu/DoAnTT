<?php
include("include/connect.php");
?>
<style type="text/css">
	.khuyenmai table {border-collapse:collapse; width:auto; margin: 30px auto;}
	.khuyenmai tr td { text-align:center; border: solid 0.5px black; padding: 10px 20px;}
</style>
<div class="breadcrumb clearfix" style="padding-left: 10px; margin-top: 65px;">
	<ul>
		<li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
			<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
		</li>
		<li class="icon-li"><strong>Khuyến mãi</strong> </li>
	</ul>
</div>
<div class="khuyenmai">
		<h1 class="title clearfix"><span>SẢN PHẨM KHUYẾN MÃI</span></h1>
	<table>
		<tr style="background:#f0d115; height:30px; color:black;">
			<td>ID</td>
			<td>Tên SP</td>
			<td>Giảm giá</td>
			<td>Khuyến mãi</td>
			<td>Giá KM</td>
		</tr>

		<?php

		$sql=  "select * from sanpham";
		$query=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
		$total=mysqli_num_rows($query);
		$idsp=1;
		while($row=mysqli_fetch_array($query))
		{
			
			if($row['khuyenmai2']!="")
			{
			?><tr>
				<td><?php echo $idsp++; ?></td>
				<td><p style="padding-top:5px; padding-bottom:5px;"><a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>"><?php echo $row['tensp'] ?></a></p></td>
				<td><?php echo $row['khuyenmai1'] ?> %</td>
				<td><p style="padding-top:5px; padding-bottom:5px;"><?php echo $row['khuyenmai2'] ?></p></td>
				<td><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?></</td>
				
			</tr>
			<?php 
		}
		else if($row['khuyenmai1']>0)
		{
		?><tr>
			<td><?php echo $idsp++; ?></td>
			<td><p style="padding-top:5px; padding-bottom:5px;"><a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>"><?php echo $row['tensp'] ?></a></p></td>
			<td><?php echo $row['khuyenmai1'] ?> %</td>
			<td><p style="padding-top:5px; padding-bottom:5px;"><?php echo $row['khuyenmai2'] ?></p></td>
			<td><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?></</td>

			<td><?php echo $idsp++; ?></td>
			<td><p style="padding-top:5px; padding-bottom:5px;"><a href="index.php?content=chitietsp&idsp=<?php echo $row['idsp'] ?>"><?php echo $row['tensp'] ?></a></p></td>
			<td><?php echo $row['khuyenmai2'] ?> %</td>
			<td><p style="padding-top:5px; padding-bottom:5px;"><?php echo $row['khuyenmai1'] ?></p></td>
			<td><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?></</td>

		</tr>
		<?php 
	}
	else echo "";		
}
?>

</table>
</div>
