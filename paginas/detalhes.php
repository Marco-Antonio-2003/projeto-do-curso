<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Carro</title>

  <!-- Adicione os links do Bootstrap 4 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      padding: 20px;
      background: url('pexels-aleksandar-pasaric-4512439.jpg') no-repeat center center fixed;
      background-size: cover;
      background-color: #500266; /* Cor roxa */
      color: #fff; /* Cor do texto */
    }

    .car-details {
      max-width: 600px;
      margin: 0 auto;
      background-color: #500266; /* Cor roxa */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
      color: #fff; /* Cor do texto branco */
    }

    img {
      max-width: 100%;
      height: auto;
      margin-top: 10px;
    }

    .btn-container {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="car-details">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alugue";

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
    }

    // Verifica se o id do carro está presente na URL
    if(isset($_GET['id'])) {
      $id = $_GET['id'];

      // Faz a consulta SQL
      $sql = "SELECT * FROM tb_adicionar_carro WHERE id = $id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Saída de cada linha
        while($row = $result->fetch_assoc()) {
          echo "<h2>" . $row["nome"] . "</h2>";
          echo "<p><strong>Marca:</strong> " . $row["marca"] . "</p>";
          echo "<p><strong>Modelo:</strong> " . $row["modelo"] . "</p>";
          echo "<p><strong>Ano:</strong> " . $row["ano"] . "</p>";
          echo "<p><strong>Motorização:</strong> " . $row["motorizacao"] . "</p>";
          echo "<p><strong>Combustível:</strong> " . $row["combustivel"] . "</p>";
          echo "<p><strong>Direção:</strong> " . $row["direcao"] . "</p>";
          echo "<p><strong>Câmbio:</strong> " . $row["cambio"] . "</p>";
          echo "<p><strong>Portas:</strong> " . $row["portas"] . "</p>";
          echo "<img src='" . $row["foto"] . "' alt='Foto do carro' class='img-fluid'>";
        }
      } else {
        echo "<p>0 resultados</p>";
      }
    } else {
      echo "<p>ID do carro não especificado.</p>";
    }

    $conn->close();
    ?>
    
    <div class="btn-container">
      <a href="index.php" class="btn btn-primary">Voltar</a>
      <a href="alugar.php?id=<?php echo $id; ?>" class="btn btn-success">Alugar este veículo</a>
    </div>
  </div>
</div>

<!-- Adicione os scripts do Bootstrap 4 JS no final do corpo do documento -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
