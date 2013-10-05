<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Prefill Data Radio Button</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">	<!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Jenis Kelamin
			<input type="radio" name="sex" value="Pria" checked			
				<?php
					if (@$_POST['sex'] == 'Pria'){		//tanda @ untuk mengabaikan nilai undefined saat membuka file php pertama kali krn index sex belum memiliki nilai
						echo 'checked="checked"';		//untuk menandai radio button sesudah proses submit dilakukan
					}
				?>														
			/>Pria														<!-- input berupa radio button yang diberi nilai defaut checked-->
			<input type="radio" name="sex" value="Wanita" 				
				<?php
					if (@$_POST['sex'] == 'Wanita'){	//tanda @ untuk mengabaikan nilai undefined saat membuka file php pertama kali krn index sex belum memiliki nilai
						echo 'checked="checked"';		//untuk menandai radio button sesudah proses submit dilakukan
					}
				?>
			/>Wanita <br />												<!-- input berupa radio button-->
			<input type="submit" value="OK" />							<!--membuat button submit -->
		</form>
		
		<?php 
			if (isset($_POST['sex'])){					//kondisi melakukan cek sex mempunyai nilai atau tidak
				echo $_POST['sex'];						//mencetak isi dari index sex dengan menggunakan superglobal POST
			}
		?>
	</body>
</html>