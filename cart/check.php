 
  <?php

    $loi=0;
     foreach($_SESSION['cart'] as $stt => $soluong)
            {
               
               $sql="select soluong,tensp,daban from sanpham where idsp=$stt";
               $rows=mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
               $row=mysqli_fetch_array($rows);
               $sl=$_SESSION['cart'][$stt];
               if($row['soluong']==0 or ($row['soluong']-$row['daban'])<$sl)
               {
               echo '<script language="javascript">
        alert("Số lượng sản phẩm trong kho hiện không đủ, mời bạn chọn mua sản phẩm khác hoặc quay lại đợt sau");
        history.back(); 
        history.go(-1);
        </script>';
               $loi+=1;
               }
            }
     if($loi==0)
      echo '<meta http-equiv="refresh" content="0;index.php?content=cart&action=thanhtoan">';
   
            ?>