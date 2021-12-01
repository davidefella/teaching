<?php
session_start();

if(isset($_POST["nome_utente"])) {
	$_SESSION["nome_utente"] = $_POST["nome_utente"]; 
    header("Location: action_lab_7.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>La tua prima form HTML</title>

	</head>

	<body>
		<form action="action_lab_7.php" method="post">
			<ul>	
				<li>
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome_utente" />
				</li>
			</ul>
		</form>

        <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        echo "Session variables are set.";
        ?>
	</body>
</html>