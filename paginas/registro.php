<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_cadastro.css">
    <title>Cadastrar-se</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #fbfbfb;
		}

		form {
			background-color: #e0e0e094;
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
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 14px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
            font-size: 18px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
        }

        h1 {
			text-align: center;
			margin-top: 0px;
			color: #666;
		}
    </style>
</head>
<body>
    <form action="registroBD.php" method="post" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;"> 
	<img src="logoSiteSmall.png" alt="Logo" style="position: absolute; top: 650px; left: calc(50% - 195px); width: 400px; height: 80px;">
        

        
		<h2>cadastro</h2>

        <label for="nome">Seu nome</label>  
        <input type="text" id="nome" name="nome">

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">

		<label for="nome">Seu login: </label>  
        <input type="text" id="login" name="login">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">

        <div style="font-size: 12px;"> 
			<input type="checkbox" name="termos" style="margin-right: 
			0px; width: 20px; margin-top: 10px; height: 14px;"> 
			Aceita nossos 
			<a href="pagina_termos.html">termos e serviços</a> e nossa <a href="politica_privacidade.html">política de privacidade</a> ?
		</div>
		
		 

		<div style="margin-left: 25px; margin-right: 20px; margin-top: 20px;">

        <input type="submit" value="confirmar">
    </form>

    <footer>
		<label>@2023 Rent Mobility</label>

	</footer>
</body>
</html>
