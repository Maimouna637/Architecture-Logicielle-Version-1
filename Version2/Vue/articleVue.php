<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<style type="text/css">
	body{
		overflow-y: hidden;	
	}

	body a {
		text-decoration: none;
		margin-left: 40%;
	}
	
</style>

<body>
	
		<?php 

		$var = "<table border='1'>
						<th>titre</th>
						<tr><td>";

			foreach ($chaine as $key => $value)
			{

				$valeur = utf8_encode($chaine[$key]['titre']);

			}

			$tab = $var.$valeur;
				$tab = $tab."</td></tr></table>";

				echo $tab;
			
		?>
		
</body>
</html>
