<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Hapus Session</title>
	</head>

	<body>
		<?php
			//inisialisasi data session
			session_start();
			
			//set session jika belum ada
			if(isset($_SESSION['test'])){
				//hapus session test
				unset($_SESSION['test']);
				echo 'session dihapus';
			}else{
				echo 'Unset ';
				//mencetak semua elemen session
				print_r($_SESSION);
			}
		?>
		<p>
			Tekan Refresh (F5);
		</p>
	</body>
</html>
