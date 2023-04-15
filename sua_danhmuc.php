<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="css/them_sanpham.css" />
</head>

<body>
<?php
	include'../include/connect.php';
	


if(isset($_POST['btnthem']))
{
	$madm = $_GET['madm']; // Cho lên đầu nhé
   $m="";
   if($_POST['tendm'] == NULL){
      echo "Xin vui lòng nhập tên danh mục<br />";
   }else{
      $m=$_POST['tendm'];
   }




   if($m)
   {
	  $m = $_POST['tendm']; //Không đk dùng $_GET[] 
	  $d = 1;
      $sql="UPDATE danhmuc SET tendm='".$m."', dequi='".$d."' WHERE madm='".$madm."'"; //chưa khai báo $madm mà đã dùng.
      mysqli_query(mysqli_connect("localhost","root","","oto"),$sql);
	 // mysqli_error();
      header("location:admin.php?admin=hienthidm");
      //exit();
   }
}

$query=mysqli_query(mysqli_connect("localhost","root","","oto"),"SELECT * FROM danhmuc WHERE madm= '{$_GET['madm']}' ");  // OK nhé
// Cho vòng lặp vào
$row=mysqli_fetch_array($query); // chưa có mysql_query nhé. ở trên có kia. 

?>

<form action="?admin=suadm&madm=<?php echo $row['madm']; ?>" method="post" name="frm" onsubmit="return kiemtra1()"> <!-- $row ở đâu ra thế? -->
	<table>
		<tr class="tieude_themsp">
			<td colspan=2 >Sửa Danh Mụ</td>
		</tr>
		<tr>
			<td>Tên danh mục</td>
			<td><input type="text" name="tendm" value="<?php echo $row['madm']; ?>" /> </td>
		</tr>
		
		<tr>
			<td>Sua danh mục</td>
			<td><input type="text" name="Suadm" value="<?php echo $row['madm']; ?>" /> </td>
		</tr>

	   <tr>
				<td colspan=2 class="input"> <input type="submit" name="btnthem" value="Update" />
				<input type="reset" name="" value="Hủy" /> </td>
		</tr>
	</table>
</form>
</body>
</html>

<script language="javascript">
 	function  kiemtra()
	{
	    if(frm.tendm.value=="")
		{
			alert("Bạn chưa nhập tên danh mục. Vui lòng kiểm tra lại");
			frm.tendm.focus();
			return false;	
		}
	}
 </script>