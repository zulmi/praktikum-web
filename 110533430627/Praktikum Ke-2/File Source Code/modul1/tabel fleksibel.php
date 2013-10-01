<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tabel Fleksibel</title>
	</head>

	<body>
		<?php 
			$rows=3;
			$cells=10;
			$columns=4;
			$width = $columns * 100;
			echo '<h2>Hasil Generate Tabel Fleksibel ' .$cells.' sel dan ' .$columns.' kolom</h2><br />';
			echo "<table width=".$width." border=1>";
			$rw = 0;
			$cel = 1;
			while ($rw < $rows && $cel <= $cells){
				echo "<tr>";
				$cl = 0;
				while ($cl < $columns){
					if ($cel <= $cells){
						echo "<td><div align=center>".$cel."</div></td>";
						$cel++;
					}
					$cl++;
				}
				echo "</tr>";
				$rw++;
			}
			echo "</table>";
		?>
	</body>
</html>
