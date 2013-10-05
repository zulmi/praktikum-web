<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Data CheckBox</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Hobby
			<input type="checkbox" name="hobby[]" value="Membaca" />Membaca			<!-- input berupa CheckBox -->
			<input type="checkbox" name="hobby[]" value="Olahraga" />Olahraga		<!-- input berupa CheckBox -->
			<input type="checkbox" name="hobby[]" value="Menyanyi" />Menyanyi		<!-- input berupa CheckBox -->
			<input type="submit" value="OK" />										<!--membuat button submit -->
		</form>
		
		<?php 
			//Ekstraksi Nilai
			if (isset($_POST['hobby'])){						//kondisi melakukan cek hobby mempunyai nilai atau tidak
				foreach ($_POST['hobby'] as $key => $val){		//pengulangan untuk mendapatkan nilai array hobby dan disimpan pada variabel $val
					echo $key.'->'.$val.'<br />';				//menampilkan index array dan isi array
				}
			}
		?>
	</body>
</html>