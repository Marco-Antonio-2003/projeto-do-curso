<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style_login.css">
    <title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #fbfbfb;
		}

		form {
			background-color: #f0f0f0;
			padding: 10px;
			margin: 50px auto;
			max-width: 400px;
			box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
			border-radius: 30px;
		}

		input[type="text"], input[type="password"] {
			display: block;
			margin: 10px 0px;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		input[type=""] {
			background-color: #55bd59;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 7px;
			cursor: pointer;
			text-align: center;
			
		} 

		h1 {
			text-align: center;
			margin-top: 0px;
			color: #666;
		}

		input[type="radio"] {
			text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
	</style>
</head>

<body>
	<form style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;" id="form_login" action="../paginas/loginBD.php" method="POST">
		<img src="../img/logoSiteSmall.png" alt="Logo" style="position: absolute; top: 600px; left: calc(50% - 195px); width: 400px; height: 80px;">
		<h1>Fazer Login</h1>
		<label for="login">Login: :</label>
		<input  type="text" id="email" name="login" required>
		<label for="password">Senha:</label>
		<input  type="password" id="senha" name="senha" required>
		<div style="margin-left: 25px; margin-right: 20px; margin-top: 15px; justify-content: center;">
        <input type="submit" id="submeter" value="Entrar com email" class="btn btn-success"/>
		</div>
		<div style="width: 20px; margin-top: 5px;"></div>
		<div style="margin-left: 25px; margin-right: 20px; margin-top: 20px;">
			<label> Ainda não tem conta ? </label>
			<a href="../paginas/registro.php">
				<button style="border-radius: 7px;" type="button" class="btn btn-primary">Cadastrar-se</button>
			</a>
		</div>
	</form>
	<footer style="font-style: italic;">
		<label>ler nossos</label>
		<a href="../paginas/pagina_termos.html">termos e serviços</a> e nossa <a href="../paginas/politica_privacidade.html">política de privacidade</a>
		<p>© 2023 Rent Mobility</p>
	</footer>
</body>

</html>