<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Menggunakan Session</title>
	</head>

	<body>
		<?php
			//inisialisasi data session
			session_start();
			
			//set session jika belum ada
			if(!isset($_SESSION['test'])){
				echo $_SESSION['test'] = 'value';
			}else{
				echo 'Session di-set <br />';
				//mencetak nilai session test
				echo 'Nilai: '.$_SESSION['test'].'<br />';
				//mencetak semua elemen session
				print_r($_SESSION);
			}
		?>
		<p>
			Tekan Refresh (F5);
		</p>
	</body>
</html>
