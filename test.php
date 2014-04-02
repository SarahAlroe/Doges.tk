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
				$prioridogedir="lib/doges/prioritised/";
				$dogedir="lib/doges/";
				$dogeglob = array_merge(glob($prioridogedir."*.{jpg,png,gif}", GLOB_BRACE), glob($dogedir."*.{jpg,png,gif}", GLOB_BRACE));
				foreach ($dogeglob as $filename) {
					$explodefile=explode(".", $filename);
					$basefile=$explodefile[0];
					$purefilename=end (explode("/", $basefile));
					echo "<div class='dogeoutcontainer'><div class='dogecontainer' id='".$purefilename."'>";
					echo "<img class='dogeimg' alt='".$purefilename."' src='".$filename."'/>";
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