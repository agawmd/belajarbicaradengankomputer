<?php
	$dir =	array_filter(
				array_filter(
					glob('*'), 
					'is_dir'
				), 
				function($d) {
					return !in_array($d, ['nbproject','sectionlib']);
				}
			);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic</title>
	<style type="text/css">
		body {
			font-family: sans-serif;			

		}
		a {
			text-decoration: none;
			padding: 10px;
			font-size: 12px;
			line-height: 1.3em;
			color: #ffffff;
			animation: cubic-bezier(.66,2.38,0,-0.54) .5s;
		}
		a:hover{
			font-weight: 800;
			font-size: 14px;
			text-shadow: 0px 0px 5px green;
		}
		.navigator {
			background: #333333;
			width: 19%;
			height: 99%;
			position: absolute;
			left: 0%;
			top: 0%;
			overflow-x: left;
			overflow-y: none;
		}
		.container {
			width: 79.8%;
			height: 99%;
			position: absolute;
			left: 20%;
			top: 0%;
		}
	</style>
</head>
<body>
	<div class='navigator'>
		<table>
			<?php
				foreach ($dir as $v) {
					echo "<tr><td><a href='$v' target='container'>$v</a></td></tr>";
				}
			?>
		</table>
	</div>
	<iframe name='container' src='welcome' class='container'></iframe>
</body>
</html>