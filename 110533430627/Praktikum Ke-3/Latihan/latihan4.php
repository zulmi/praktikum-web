<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data Seleksi</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Pekerjaan
			<select name="job">							<!--membuat combo box dengan nama index job-->
				<option value="Mahasiswa">Mahasiswa		<!--membuat menu pilihan combo box dengan value Mahasiswa-->
				<option value="ABRI">ABRI				<!--membuat menu pilihan combo box dengan value ABRI-->
				<option value="PNS">PNS					<!--membuat menu pilihan combo box dengan value PNS-->
				<option value="Swasta">Swasta			<!--membuat menu pilihan combo box dengan value Swasta-->
			</select> <br />
			<input type="submit" value="OK" />			<!--membuat Button Submit-->
		</form>
		
		<?php 
			if (isset($_POST['job'])){					//kondisi melakukan cek job mempunyai nilai atau tidak
				echo $_POST['job'];						//mencetak isi dari index job dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>