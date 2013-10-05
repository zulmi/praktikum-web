<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Methode Get</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">	<!--form ditangani oleh current script & transfer data menggunakan metode GET-->
			Nama <input type="text" name="nama" /> <br />			<!--Input berupa Text Field -->	
			<input type="submit" value="OK" />						<!--membuat button submit -->
		</form>
		<?php 
			if (isset($_GET['nama'])){								//kondisi melakukan cek nama mempunyai nilai atau tidak
				echo 'Hallo, '.$_GET['nama'];						//mencetak isi dari variabel nama dengan menggunakan superglobal GET
			}
		?>
	</body>
</html>