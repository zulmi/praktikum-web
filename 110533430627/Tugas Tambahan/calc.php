<!--
Nama		: Zulmi Rizah Ahmad Junaedi
NIM			: 110533430627
Prodi/OFF	: S1 PTI 2011 Off D

Algoritma:
	1.start
	2.input angka1,angka2 dan operator
	3.cek validasi angka1 dan angka2
	4.periksa operator
	5.lakukan proses aritmatika sesuai operator
	6.tampilkan hasil
	7.finish
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Kalkulator</title>
		<style type="text/css">
			body{
				background-color:#00FF33;
			}
			.box{
				width:60%;
				height:40%;
				border:5pt solid #009900;
				margin:30px auto 30px auto;
			}
		</style>
		<script type="text/javascript">
			function cek(angka){
				cek = /^[A-Za-z]{1,}$/;		//validasi angka
				return cek.test(angka);
			}
			function validasi(form){
				var angka1 = form.var1.value;		//	inisialisasi
				var angka2 = form.var2.value;		//	variabel
				if(angka1 === '' || angka2 === ''){				//cek input kosong atau tidak
					alert("Angka1 dan Angka2 Tidak Boleh Kosong"); 
					form.var1.focus();				
					return false;
				}else if(cek(angka1) || cek(angka1)){			//cek input angka1 dan angka2 berupa angka atau tidak
					alert("Angka1 dan Angka2 harus berupa angka");
				}else{											//input benar
					return true;
				}		
			}
		</script>
	</head>

	<body>
		<?php
			if(@$_POST['operator'] == '+'){				//proses penjumlahan
				$_POST['hasil']=$_POST['var1']+$_POST['var2'];
			}else if(@$_POST['operator'] == '-'){		//proses pengurangan
				$_POST['hasil']=$_POST['var1']-$_POST['var2'];	
			}else if(@$_POST['operator'] == '*'){		//proses perkalian
				$_POST['hasil']=$_POST['var1']*$_POST['var2'];
			}else if(@$_POST['operator'] == '/'){		//proses pembagian
				$_POST['hasil']=$_POST['var1']/$_POST['var2'];
			}
		?>
		<div class="box">
			<h1 style="text-align:center;color:#009900;">Kalkulator PHP</h1>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" name="form" method="post" onSubmit="return validasi(this)">
				<center>
				Angka1
				<input type="text" name="var1" value="<?php
					if(isset($_POST['var1'])){		//prefilling teks input
						echo $_POST['var1'];
					}
				?>"/><br />
				<select name="operator">
					<option value="+"
					<?php
						if(@$_POST['operator']=='+'){	//prefilling option
							echo 'selected="selected"';
						}
					?>
					>+</option>
					<option value="-"
					<?php
						if(@$_POST['operator']=='-'){	//prefilling option
							echo 'selected="selected"';
						}
					?>
					>-</option>
					<option value="*"
					<?php
						if(@$_POST['operator']=='*'){	//prefilling option
							echo 'selected="selected"';
						}
					?>
					>*</option>
					<option value="/"
					<?php	
						if(@$_POST['operator']=='/'){	//prefilling option
							echo 'selected="selected"';
						}
					?>
					>/</option>
				</select><br />
				Angka2
				<input type="text" name="var2" value="<?php
					if(isset($_POST['var2'])){			//prefilling teks input
						echo $_POST['var2'];
					}
				?>"/><br />
				<input type="submit" value="=" /><br />
				Hasil
				<input type="text" name="hasil" disabled="disabled" value="<?php
					if(isset($_POST['hasil'])){			//nilai hasil
						echo $_POST['hasil'];
					}
				?>" /></center>
			</form>
		</div>
	</body>
</html>