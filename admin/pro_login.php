<?php 
session_start();
include 'koneksi.php';
if (isset($_POST['login']))
{
	$user = mysql_real_escape_string(htmlentities($_POST['user']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['pass'])));	
	$sql = mysql_query("SELECT * FROM user WHERE user='$user' AND pass='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
		}else{
			$_SESSION['guest']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login Guest!"); document.location="guest/index.php";</script>';
		}
	}
}
?>