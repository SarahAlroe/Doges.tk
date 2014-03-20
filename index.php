<!DOCTYPE html>
<html>
	<head>
		<?php
		include $_SERVER['DOCUMENT_ROOT'] . '/lib/base.php';
		?>
	</head>
	<body>
		<div class="container">
			<div class="headerimage">
			<img style="width: 100%" src="/lib/img/Doges.Tk.png"></div>
			<div class="contentbox">
				
				<?php
				$dogedir="lib/doges/";
				foreach (glob($dogedir."*.{jpg,png,gif}", GLOB_BRACE) as $filename) {
					echo "<div class='dogeoutcontainer'><div class='dogecontainer'>";
					$explodefile=explode(".", $filename);
					$basefile=$explodefile[0];
					echo "<img class='dogeimg' alt='".$filename."' src='".$filename."'/>";
					if(file_exists($basefile.".txt")){
						echo "<br />";
						include $basefile.".txt";
						echo "<br />";
					}
					echo "</div></div><br />";
				}
				?>
				</div>
		</div>
	</body>
</html>