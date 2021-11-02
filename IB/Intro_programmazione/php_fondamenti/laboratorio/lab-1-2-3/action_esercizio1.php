<?php
    /*Insieme ad un messaggio di ringraziamento, stampare il contenuto della variabile $_POST*/
    //SOLUZIONE 1 - Stampo tuttto l'array $_POST con la funzione var_dump
    var_dump($_POST);

    //SOLUZIONE 2 - Con un ciclo foreach itero sull'array $_POST e stampo chiavi e valori
    foreach ($_POST as $chiave => $valore) {
        echo "<pre>\n";
        echo $chiave.": ".$valore;
        echo "</pre>\n";
    }
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Thanks</title>
	</head>

	<body>
        Thank you for submitting!
	</body>
</html>