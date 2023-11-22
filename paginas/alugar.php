<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Rent Mobility</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <style>
    input[type="text"],
    select {
      margin-bottom: 10px;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    label {
      font-weight: bold;
    }

    button {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      background-color: #428bca;
      color: #fff;
      cursor: pointer;
    }
  </style>

</head>

<header>
    <div class="col-3">
			<a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
		</div>
</header>


<body style="background-image: url('../img/pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    <!-- imagem creditada a aleksandar pasaric -->
<br>
<form action="../paginas/conexao_alugar.php" method="post">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <div class="container  justify-content-center">
    <div class="row  justify-content-center" style="color: white;">
      <div class="row  justify-content-center" style="color: white;">
      <h1 style="width:50%">Informações do Cliente</h1>
      </div>
      <form style="width:80%" method="post" action="../paginas/cadastrar-usuario.php">
        <div class="row">
          <div class="col-6">
            <div class="col">
              <label for="nome">Nome:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="nome" name="nome" required>
            </div>
          </div>
          <div class="col-6">
            <div class="col">
              <label for="sobrenome">Sobrenome:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="sobrenome" name="sobrenome" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="col">
              <label for="CPF">CPF:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="nome" name="CPF" required>
            </div>
          </div>
          <div class="col-4">
            <div class="col">
              <label for="sobrenome">Nascimento:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="date" id="sobrenome" name="nascimento" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="col">
              <label for="rua">Rua:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="rua" name="rua" required>
            </div>
          </div>
          <div class="col-4">
            <div class="col">
              <label for="bairro">Bairro:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="bairro" name="bairro" required>
            </div>
          </div>
          <div class="col-4">
            <div class="col">
              <label for="cep">CEP:</label>
            </div>
            <div class="col">
              <input style="width:100%" type="text" id="cep" name="cep" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="col">
              <label for="pagamento">Método de pagamento:</label>
            </div>
            <div class="col">
              <select id="pagamento" name="pagamento" required onchange="mostrarCamposCartao()" required
              onchange="mostrarcampopix()">
              <option value="">-- Selecione uma opção --</option>
              <option value="cartao">Cartão de crédito</option>
              <option value="pix">PIX</option>
            </select>            </div>
          </div>
          
        </div>

        <div id="camposCartao" style="display: none;">
          <div class="cartao">
            <label for="numCartao">Número do cartão :</label>
            <input type="text" id="numCartao" name="numCartao">
            <br>
            <label for="dataValidade">Data de validade :</label>
            <input style="margin-left: 10px;" type="text" id="dataValidade" name="dataValidade">
            <br>
            <label for="cvv">CVV :</label>
            <input style="margin-left: 103px;" type="text" id="cvv" name="cvv">
          </div>
        </div>    
        <div class="row justify-content-end">
        <form action="../paginas/conexao_alugar.php" method="get">
            
            <button style="margin-left: 790px; width: 120px;" type="submit">Alugar</button>
        </form>

    </div>
      </from>


    </div>
</form>



    </div>
  
  </div>
  <div>
    </div>
  </div>
  <div style=" padding-top:100px ;"></div>

  <script>
    function mostrarCamposCartao() {
      var pagamentoSelect = document.getElementById("pagamento");
      var camposCartaoDiv = document.getElementById("camposCartao");

      if (pagamentoSelect.value === "cartao") {
        camposCartaoDiv.style.display = "block";
      } else {
        camposCartaoDiv.style.display = "none";
      }
    }
    
  </script>


</body>

</html>
<style>
  .logo h1 {
    font-size: 32px;
    margin-right: 300px;
    color: black;
    margin-left: 180px;

  }
  input {
    height: 40px;
  }
  h1 {
    color: white;
  }

  ul {
    color: white;
  }

  li {
    color: white;
  }

  p,
  label {
    color: white;
  }</style>