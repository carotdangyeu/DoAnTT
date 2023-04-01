<div class="adv">
    <div class="container">
        <div class="row" style="margin-top: 54px; padding-left:10px">
            <div class="col-md-12">

                <div class="breadcrumb clearfix">
                    <ul>
                        <li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
                            <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                        </li>
                        <li class="icon-li"><strong>Giỏ hàng</strong> </li>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                </script>
            </div>
        </div>
    </div>
</div>


<div class="main">
    <div class="container">
        <div class="row" style="width: 1170px;">
            <div class="col-md-12">
                <script src="app/services/orderServices.js"></script>
                <script src="app/controllers/orderController.js"></script>
                <div class="cart-content" ng-controller="orderController" ng-init="initOrderCartController()">
                    <h1 class="title clearfix" ><span>Giỏ hàng của tôi</span></h1>
                    

                    <?php
                    if(isset($_SESSION['cart'])){
                        $count=count($_SESSION['cart']);
                    }
                    else $count=0;{
                        $tongtien=0;
                    }
                    if($count==0){
                        ?>
                        <div style="text-align: center; font-size: 18px; margin-bottom: 15px;">Giỏ hàng của bạn chưa có sản phẩm nào</div>
                        <div style="text-align:center;">
                            <a class="btn btn-default" href="index.php?content=sanpham" onclick="window.history.back()">Tiếp tục mua hàng</a>
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <div class="cart-block">
                            <div class="cart-info table-responsive">
                                <table class="table product-list">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th width="185px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql ="select * from sanpham where idsp in(";
                                        foreach($_SESSION['cart'] as $stt => $soluong)
                                        {
                                          if($soluong>0)
                                            $sql .= $stt.",";
                                    }
                                    if (substr($sql,-1,1)==',')
                                    {
                                        $sql = substr($sql,0,-1);
                                    }
                                    $sql .=' )order by idsp DESC';
                                    $rows=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
                                    while($row=mysqli_fetch_array($rows))
                                    {
                                        ?>
                                        <form action="index.php?content=cart&action=update&idsp=<?php echo $row['idsp']?>" method="POST" name="update">
                                            <tr ng-repeat="item in OrderDetails">
                                                <td class="des">
                                                    <h2><?php echo $row['tensp']?></h2>
                                                </td>
                                                <td class="image" style="text-align: left;">
                                                    <img src="Uploads/shop264/images/<?php echo $row['hinhanh']?>" class="img-responsive" />
                                                </td>
                                                <td class="price"><?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100)),0,",",".");?> đ</td>
                                                <td class="quantity">
                                                    <input type="number" name="sl" value="<?php echo $_SESSION['cart'][$row['idsp']] ?>" class="text" />
                                                </td>
                                                <td class="amount">
                                                    <?php echo number_format(($row['gia']*((100-$row['khuyenmai1'])/100))*$_SESSION['cart'][$row['idsp']],0,",",".") ?> đ
                                                </td>
                                                <td><div class="form-group" align="center">
                                                    <div class="col-sm-offset-4 col-sm-8" style="margin: 0px; width: 100%; "><input class="btn btn-default" type="submit" name="huy" value="Xóa"/>
                                                     <input class="btn btn-default" type="submit" class="submit" value="Cập nhập" name="submit"/> </div>
                                                 </div>
                                             </td>
                                         </form>




                                     </tr>
                                     <?php 
                                     $tongtien+=$_SESSION['cart'][$row['idsp']]*($row['gia']*((100-$row['khuyenmai1'])/100));
                                 } ?>

                             </tbody>
                         </table>
                         <div class="clearfix text-right" style="padding-right: 20px;">
                            <span><b>Tổng thanh toán:</b></span>
                            <span class="pay-price">
                                <?php 
                                echo number_format($tongtien,0,",","."); ?> đ
                                <?php 
                                ?> 
                            </span>
                        </div>
                        <div class="button text-right" style="padding-right: 20px;">
                            <a class="btn btn-default" href="index.php?content=sanpham" onclick="window.history.back()">Tiếp tục mua hàng</a>
                            <a class="btn btn-primary" href="index.php?content=cart&action=check">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
</div>
</div>
