<!--
Algoritma:
	1.start
	2.includekan file proses.php
	3.cek username dan password dengan inputan
	4.tapilkan login apabila session kosong atau tidak tersedia
	5.cek username dan password dengan inputan,jika cocok tampilkan file index.php,jika tidak cocok tampilkan pemberintahuan
	6.lakukan langkah 2-5 sampai ketemu inputan yang cocok
	7.setelah cocok periksa isi session apabila berisi '' maka tampilkan index.php kemudian hapus session
	8.apabila session berisi username maka hapus session setelah teks logout di klik
	9.finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Halaman Administrator</title>
		<style type="text/css">
			body{
				background-color:#000066;
				color:#FF0000;
			}
			a{
				color:#FF0000;
			}
			.inner{
				margin: 200px auto;
				padding: 20px;
				width:240px;
				border:5px solid #FF0000;
			}
		</style>
	</head>

	<body>
		<?php
			ini_set('display errors',1);
			define('_VALID',1);
			//include file eksternal
			require_once('./proses.php');
			init_login();		//cocokkan username dan passsword dengan input
			validate();			//tampilkan login jika session kosong atau perintah logout jika session tidak kosong
		?>
		<h1 style="text-align:center">Simulasi Halaman Admin</h1>
		<p style="text-align:center">
			<a href="?m=Logout">Logout</a>
		</p>
		<div class="inner">
			
			Menu-menu Admin Disini
			<?php
				if($_SESSION['login']==''){			//hapus session jika checkbox tidak dicentang
					unset($_SESSION['login']);
					session_destroy();
					exit;
				}
			?>
		</div>
	</body>
</html>