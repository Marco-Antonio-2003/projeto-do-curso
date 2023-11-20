<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Rent Mobility</title>
  <link rel="stylesheet" href="style.css">
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
    <img src="logoSiteSmall.png" style="border-radius: 20px; width: 360px;">
  </div>
  <div class="col-9 row justify-content-end">
    <div class="col-2">
      <div class="btn_header">
        <a href="login.html">
          <button class="btnLogin-popup"> Produtos </button>
        </a>
      </div>
    </div>
    <div class="col-2">
      <div class="btn_header">
        <a href="login.html">
          <button class="btnLogin-popup"> Entrar </button>
        </a>
      </div>
    </div>
    <div class="col-2">
      <div class="login">
        <a href="login.html">
          <button class="btnLogin-popup"> Conta </button>
        </a>
      </div>
    </div>
  </div>
</header>

<body style="background-image: url('pexels-aleksandar-pasaric-4512439.jpg');background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">
    <!-- imagem creditada a aleksandar pasaric -->
<br>
<form action="conexao_alugar.php" method="post">
  <div class="container  justify-content-center">
    <div class="row  justify-content-center" style="color: white;">
      <div class="row  justify-content-center" style="color: white;">
      <h1 style="width:50%">Informações do Cliente</h1>
      </div>
      <form style="width:80%" method="post" action="cadastrar-usuario.php">

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
          <a href="conexao_alugar.php">
            <button style="margin-left: 790px; width: 120px;" type="submit">Salvar</button>
          </a>
          <input type="hidden" name="idVeiculo" value="ID_DO_VEICULO">


    </div>
</form>  
  </div>
  <div>
    </div>
    </form>
  </div>
  <div style=" padding-top:100px ;"></div>
  <footer style="font-style: italic;color:white ">
    <p style="font-style: italic;color:white ">Sobre nossa empresa: Alugar um carro da Rent Mobility em Sorocaba pode
      ser uma ótima opção para quem busca
      liberdade e praticidade durante a viagem.</p>
    <p style="font-style: italic;color:white "> Com uma frota de veículos bem cuidada e diversificada, é possível
      escolher o carro que melhor atende às suas
      necessidades. </p>
    <p style="font-style: italic;color:white ">Além disso, a Rent Mobility oferece preços competitivos e um serviço de
      atendimento ao cliente de qualidade,
    </p>
    <p style="font-style: italic;color:white ">garantindo uma experiência satisfatória ao alugar um carro em Sorocaba.
    </p>

    <a style="color: rgb(96, 96, 253);" href="pagina_termos.html">termos e serviços</a> <br> <a
      style="color: rgb(96, 96, 253);" href="politica_privacidade.html">política de privacidade</a>
    <p>&copy; 2023 Rent Mobility</p>
  </footer>
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