<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>La tua prima form HTML</title>
		<style>
			form {
				margin: 0 auto;
				width: 400px;
				padding: 1em;
				border: 1px solid #ccc;
				border-radius: 1em;
			}

			ul {
				list-style: none;
				padding: 0;
				margin: 0;
			}

			form li + li {
				margin-top: 1em;
			}

			label {
				display: inline-block;
				width: 90px;
				text-align: right;
			}

			input,
			textarea {
				font: 1em sans-serif;
				width: 300px;
				box-sizing: border-box; 
				border: 1px solid #999;
			}

			input:focus,
			textarea:focus {
				border-color: #000;
			}

			textarea {
				vertical-align: top;
				height: 5em;
			}

			.button {
				padding-left: 90px;
			}

			button {
				margin-left: 0.5em;
			}
		</style>
	</head>

	<body>
		<form action="action_esercizio3.php" method="post">
			<ul>	
				<li>
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome_utente" />
				</li>
				<li>
					<la bel for="cognome">Cognome:</label>
					<input type="text" id="cognome" name="cognome_utente" />
				</li>
				<li>
					<label for="indirizzo">Indirizzo:</label>
					<input id="indirizzo" name="indirizzo_utente"></input>
				</li>
				<li>
					<label for="mail">E-mail:</label>
					<input type="email" id="mail" name="email_utente" />
				</li>
				<li class="button">
					<button type="submit">Invia i tuoi dati</button>
				</li>
			</ul>
		</form>
	</body>
</html>