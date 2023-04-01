<?php
if ($action = "insert") 
{
        $hoten = $_POST['hoten'];
        $oto = $_POST['oto'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];
        $phuongthuc = $_POST['phuongthuc'];
        $ngay = date('Y-m-d');
        if (isset($_SESSION['idnd'])) {


                $sql = mysqli_query(mysqli_connect("localhost", "root", "", "oto"), "select * from nguoidung where idnd='" . $_SESSION['idnd'] . "'");
                $row = mysqli_fetch_array($sql);

                $idnd = $row['idnd'];

                $sql = "INSERT INTO hoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES 
                ('$idnd','$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";
        } else
        $sql = "INSERT INTO hoadon(hoten,diachi,oto,email,ngaydathang,trangthai) VALUES 
        ('$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";

        mysqli_query(mysqli_connect("localhost", "root", "", "oto"), $sql);
         $mahd= mysqli_fetch_array(mysqli_query(mysqli_connect("localhost", "root", "", "oto"), "select MAX(mahd) as mahd from hoadon where mahd>0"));

        mysqli_query(mysqli_connect("localhost", "root", "", "oto"), "select mahd from hoadon where idnd ='$idnd'");
        // $mahd=mysqli_insert_id(mysqli_connect("localhost", "root", "", "oto"));
        foreach ($_SESSION['cart'] as $stt => $soluong) {
                $sql = "select * from sanpham where idsp=$stt";
                $rows = mysqli_query(mysqli_connect("localhost", "root", "", "oto"), $sql);
                $row = mysqli_fetch_array($rows);
                
                //$mahd=$row['mahd'];
                $tensp = $row['tensp'];

                $gia = $row['gia'] * ((100 - $row['khuyenmai1']) / 100);
                $sql1 ="insert into chitiethoadon(mahd,Tensp,Soluong,gia,phuongthucthanhtoan) values('$mahd[0]','$tensp','$soluong','$gia','$phuongthuc')";
                 mysqli_query(mysqli_connect("localhost","root","","oto"),$sql1);

        }
        foreach ($_SESSION['cart'] as $stt => $soluong) {

                $sql = "select * from sanpham where idsp=$stt";
                $rows = mysqli_query(mysqli_connect("localhost", "root", "", "oto"), $sql);
                $row = mysqli_fetch_array($rows);
                $ban = $row['daban'] + $soluong;
                $con = $row['soluong'] - $soluong;
                $sql = "UPDATE sanpham SET daban='$ban',soluong='$con' WHERE idsp = $stt";

                mysqli_query(mysqli_connect("localhost", "root", "", "oto"), $sql);
        }

        unset($_SESSION['cart']);
}
?>
<?php 
echo "
<script language='javascript'>
alert('Đơn hàng của bạn đã thiết lập thành công chúng tôi sẽ chuyển hàng cho bạn trong thời gian sớm nhất');
window.open('index.php','_self',3);
</script>
";
?>