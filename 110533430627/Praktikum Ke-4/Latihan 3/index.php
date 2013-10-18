<!--
Algoritma:
	1.start
	2.includekan file auth.php
	3.cek username dan password dengan inputan
	4.tapilkan login apabila cookie kosong atau tidak tersedia
	5.cek username dan password dengan inputan,jika cocok tampilkan file index.php,jika tidak cocok tampilkan pemberintahuan
	6.lakukan langkah 2-5 sampai ketemu inputan yang cocok
	7.setelah cocok periksa isi cookie apabila session berisi username maka hapus session setelah teks logout di klik
	9.finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Halaman Administrator</title>
		<style type="text/css">
			.inner{
				margin: 200px auto;
				padding: 20px;
				width:240px;
				border:1px solid #333
			}
		</style>
	</head>

	<body>
		<?php
			ini_set('display errors',1);
			define('_VALID',1);
			
			//include file eksternal
			require_once('./auth.php');
			
			init_login();
			validate();
		?>
		<h3>Simulasi Halaman Admin</h3>
		<p>
			<a href="?m=Logout">Logout</a>
		</p>
		Menu-menu Admin Disini
	</body>
</html>