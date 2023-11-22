<?php 
include('verificar-login.php');
require_once 'classes\Veiculos.php';
$categoria = new Veiculos();
$lista = $categoria->listarStatusAlugado();
//var_dump($lista); // Isto irá imprimir a lista de veículos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="../CSS/style.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
		.cars li {
			display: inline-block;
			width: 30%;
			margin-right: 4%;
			vertical-align: top;
			text-align: center;
		}

		.cars li:last-child {
			margin-right: 0;
		}

		.cars li img {
			max-width: 50%;
			height: auto;
		}

        h1 {
            color: white;
        }
	</style>
</head>
<body>
    <header>
		<div class="col-3">
			<a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
		</div>
	</header>
    <div class="container">
        <u><h3>LISTA DE VEICULOS ALUGADOS</h3></u>
        <br><br>
        <h3>Abrir a lista de carros adicionados</h3>
        <a href="lista-de-carros.php" class="btn btn-warning">Lista de carros</a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Motorização</th>
                    <th>Combustível</th>
                    <th>Direção</th>
                    <th>Câmbio</th>
                    <th>Portas</th>
                    <th>Foto</th>
                    <th>Ar</th>
                    <th>ABS</th>
                    <th>Alugado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha) { ?>
                    <tr>
                        <td><?php echo $linha['id']; ?></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['marca'];?></td>
                        <td><?php echo $linha['modelo'];?></td>
                        <td><?php echo $linha['ano'];?></td>
                        <td><?php echo $linha['motorizacao'];?></td>
                        <td><?php echo $linha['combustivel'];?></td>
                        <td><?php echo $linha['direcao'];?></td>
                        <td><?php echo $linha['cambio'];?></td>
                        <td><?php echo $linha['portas'];?></td>
                        <td><?php echo $linha['foto'];?></td>
                        <td><?php echo $linha['ar'];?></td>
                        <td><?php echo $linha['abs'];?></td>
                        <td><?php echo $linha['alugado'];?></td>
                        <td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        

        <br>

        <form action="alterar-veiculo.php" method="get">
            <label for="id">ID do veículo a ser alterado:</label>
            <input type="number" id="id" name="id" required>
            <input type="submit" value="Alterar" class="btn btn-success">
        </form>

        <br>

        <!-- Add Bootstrap JS and Popper.js scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <br>

        <a href="adicionar-carro.php" class="btn btn-warning">Adicionar mais carro</a>
    </div>
</body>
</html>
