<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Rent Mobility</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

<body style="background-image: url('../img/pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    <script src="script.js"></script>
    <header>
        <div class="col-3">
            <a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
        </div>
    </header>
    <br>
    <?php
    require_once 'classes/Usuarios.php';

    // Conecte-se ao banco de dados
    $conexao = new mysqli('localhost', 'root', '', 'alugue');

    // Verifique a conexão
    if ($conexao->connect_error) {
      die("Falha na conexão: " . $conexao->connect_error);
    }

    // Verifique se o id do carro está presente na URL
    if(isset($_GET['id'])) {
      $id = $_GET['id'];

      // Faz a consulta SQL
      $sql = "SELECT * FROM tb_adicionar_carro WHERE id = $id";
      $result = $conexao->query($sql);

      if ($result->num_rows > 0) {
        // Saída de cada linha
        while($row = $result->fetch_assoc()) {
          $nome = $row["nome"];
          $marca = $row["marca"];
          $modelo = $row["modelo"];
          $ano = $row["ano"];
          $motorizacao = $row["motorizacao"];
          $combustivel = $row["combustivel"];
          $direcao = $row["direcao"];
          $cambio = $row["cambio"];
          $portas = $row["portas"];
          $foto = $row["foto"];
          $ar = $row["ar"];
          $abs = $row["abs"];
          $preco = $row["preco"];
        }
      } else {
        echo "<p>0 resultados</p>";
      }
    } else {
      echo "<p>ID do carro não especificado.</p>";
    }

    $conexao->close();
  ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Detalhes do carro</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img src="../img/<?php echo $foto; ?>" class="card-img-top" alt="Imagem do carro">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-9">
                                <h5 class="card-title"><?php echo $nome; ?></h5>
                                <p class="card-text">
                                    <strong>Marca:</strong> <?php echo $marca; ?>
                                    <br>
                                    <strong>Modelo:</strong> <?php echo $modelo; ?>
                                    <br>
                                    <strong>Ano:</strong> <?php echo $ano; ?>
                                </p>
                            </div>
                            <div class="col-3">
                                <div class="btn-container">
                                    <a href="../paginas/alugar.php?id=<?php echo $id; ?>" class="btn btn-success">Alugar
                                        este
                                        veículo</a>
                                </div>
                            </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Especificações</h5>
                    <ul>
                        <li><strong>Motorização:</strong> <?php echo $motorizacao; ?></li>
                        <li><strong>Combustível:</strong> <?php echo $combustivel; ?></li>
                        <li><strong>Direção:</strong> <?php echo $direcao; ?></li>
                        <li><strong>Câmbio:</strong> <?php echo $cambio; ?></li>
                        <li><strong>Portas:</strong> <?php echo $portas; ?></li>
                        <li><strong>Ar condicionado:</strong> <?php echo $ar ? "Sim" : "Não"; ?></li>
                        <li><strong>ABS:</strong> <?php echo $abs ? "Sim" : "Não"; ?></li>
                        <li><strong>Preço:</strong> <?php echo $preco; ?></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>