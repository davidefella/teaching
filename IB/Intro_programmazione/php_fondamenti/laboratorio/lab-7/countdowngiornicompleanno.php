<?php


if(isset($_POST['submit'])){
	$target_days = mktime(0,0,0,$_POST['mese'],$_POST['giorno'],$_POST['anno']);
	echo $target_days; 

	$today = time();
	$diff_days = ($target_days - $today);
	$days = (int)($diff_days/86400);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>La tua prima form HTML</title>

	</head>

	<body>
		<form action="#" method="post">
			<ul>	
				<li>
					<label for="nome">Giorno:</label>
					<input type="text" id="giorno" name="giorno" />

					<label for="nome">Mese:</label>
					<input type="text" id="mese" name="mese" />

					<label for="nome">Anno:</label>
					<input type="text" id="anno" name="anno" />
				</li>
			</ul>
			<input type="submit" name="submit">
		</form>

        <?php
        ?>
	</body>
</html>