<!--
	Algoritma:
		1.start
		2.tampilkan form login yang memiliki aksi hasillogin.php dan menggunakan fungsi validasi javascript
		3.jika button submit diklik maka validasi akan melakukan cek terhadap inputan apabila salah satu kosong maka akan muncul pesan dan pemberian efek focus pada textfield username, apabila inputtan tidak kosong maka validasi akan melakukan cek apakah inputan merupakan huruf atau bukan dengan cara memanggil fungsi cekhuruf(huruf) apabila inputan bukan huruf maka akan muncul pesan, dan jika inputan sudah benar berupa huruf maka proses akan dilanjutkan file hasillogin.php
		4.hasillogin.php akan menyimpan hasil inputan pada variabel $Id dan $passwd
		5.hasillogin.php akan melakukan cek kondisi inputan berupa string atau bukan dengan fungsi is_string($Id) dan is_string($passwd)
		6.jika inputan berupa string maka hasillogin.php akan mencocokkan nilai $Id dengan $username dan $passwd dengan $password
		  apabila mempunyai nilai sama maka akan muncul pesan selamat datang dan jika tidak sama maka akan muncul pesan gagal
		7.jika inputtan bukan merupakan string maka akan muncul pesan inputan bukan string
		8.Finish
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Login</title>
		<style type="text/css">
			body{
				background-color:#33FFFF;
			}
			h1{
				font-size:40px;
				text-align:center;
				color:#0066FF;
			}
			.login{
				font-family:Arial, Helvetica, sans-serif;
				border:5px solid #0099FF;
				margin: auto;
				margin-top:50px;
				margin-bottom:50px;
				padding:50 50 100 50;
				font-size:14px;
				color:#000000;
				width:512px;
				height:256px;
			}
			#input{
				width:256;
				margin:50 128 10 128;
			}
		</style>
		<script type="text/javascript" language="javascript">
			function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;		//validasi huruf
				return cek.test(huruf);
			}
			function validasi(form){
				var Id = form.id.value;				//ambil nilai index id pada form login
				var passwd = form.password.value;	//ambil nilai index password pada form login
				if(Id === '' || passwd === ''){		//kondisi jika id atau passwd kosong
					alert("Username dan Password Tidak Boleh Kosong"); //pesan yg ditampilkan jika id atau passwd kosong
					form.id.focus();				//memberi perintah focus pada id apabila username atau password kosong
					return false;
				}else if(!cekhuruf(Id) === true || !cekhuruf(passwd) === true){		//kondisi mengecek inputan berupa huruf atau tidak
					alert("Username dan Password harus berupa huruf semua...!");	//pesan yg ditampilkan apabila inputan bukan huruf
					return false;
				}else{
					return true;					//perintah yang dilakakukan apabila inputan berupa huruf dan berlanjut ke hasillogin.php
				}
				
		}
	</script>
	</head>

	<body>
		<div class="login">
			<b><h1>Login</h1></b>
			<hr color="#0099FF" width="512px;" size="5px"/>
			<div id="input">
				<form action="hasillogin.php" name="login" method="post" onSubmit="return validasi(this)">	<!--form menggunakan aksi hasillogin.php dan validasi javascript saat perintah submit dilakukan dengan menggunakan metode POST -->
					Username<br />
					<input type="text" name="id" size="30" /><br />			<!--inputan textfield dengan ukuran 30 dan nama id-->
					Password<br />
					<input type="text" name="password" size="30" /><br />	<!--inputan textfield dengan ukuran 30 dan nama password-->
					<input type="submit" value="LOGIN" />					<!--inputan button submit dengan value LOGIN-->
				</form>
			</div>
		</div>
	</body>
</html>