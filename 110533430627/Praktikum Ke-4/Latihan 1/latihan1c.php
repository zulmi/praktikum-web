<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Hapus Cookie</title>
	</head>

	<body>
		<?php
			setcookie('nama_cookie','nilai_cookie');
			if(isset($_COOKIE['nama_cookie'])){
				echo 'Cookie di-set <br />';
				//menghapus cookie dengan masa berlaku 3 jam yang lalu
				setcookie('nama_cookie','',time() - 3 * 3600);
				echo 'cookie dihapus';
			}else{
				echo 'unset';
			}
		?>
		<p>
			Tekan Refresh (F5);
		</p>
	</body>
</html>
