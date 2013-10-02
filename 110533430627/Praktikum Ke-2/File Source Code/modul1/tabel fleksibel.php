<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tabel Fleksibel</title>
	</head>

	<body>
		<?php 
			function tabel($sel,$baris){
				$columns=4;
				$width = $columns * 100;
				echo '<h2>Hasil Generate Tabel Fleksibel ' .$sel.' sel dan ' .$columns.' kolom</h2><br />';
				echo "<table width=".$width." border=1>";
				$rw = 0;
				$cel = 1;
				while ($rw < $baris && $cel <= $sel){
					echo "<tr>";
					$cl = 0;
					while ($cl < $columns){
						if ($cel <= $sel){
							echo "<td><div align=center>".$cel."</div></td>";
							$cel++;
						}
						$cl++;
					}
					echo "</tr>";
					$rw++;
				}
				echo "</table>";
			}
			tabel(10,4);
		?>
	</body>
</html>
