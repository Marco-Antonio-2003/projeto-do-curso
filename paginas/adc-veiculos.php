<?php 
include('verificar-login.php');
require_once 'classes\Veiculos.php';
$categoria= new Veiculos();
$lista = $categoria->listarStatusAlugado();
//var_dump($lista); // Isto irá imprimir a lista de veículos

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<u><h3>LISTA DE VEICULOS ALUGADOS</h3></u>
</div>
<br><br>
<h3>Abrir a lista de carros adicionados</h3>
<a href="lista-de-carros.php">
    <button type="submit" class="btn btn-warning" > Lista de carros </button>
</a>
<table class="table">
    <thead>
        <td bgcolor="#CDC9C9"><b>ID:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Marca:</b></td>
        <td bgcolor="#CDC9C9"><b>Modelo:</b></td>
        <td bgcolor="#CDC9C9"><b>Ano:</b></td>
        <td bgcolor="#CDC9C9"><b>Motorização:</b></td>
        <td bgcolor="#CDC9C9"><b>Combustivel:</b></td>
        <td bgcolor="#CDC9C9"><b>Direção:</b></td>
        <td bgcolor="#CDC9C9"><b>Câmbio:</b></td>
        <td bgcolor="#CDC9C9"><b>Portas:</b></td>
        <td bgcolor="#CDC9C9"><b>Foto:</b></td>
        <td bgcolor="#CDC9C9"><b>ar:</b></td>
        <td bgcolor="#CDC9C9"><b>abs:</b></td>
        <td bgcolor="#CDC9C9"><b>alugado-sim = 1:</b></td>
    
        
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
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
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <br>
    <a href="index.php">
        <button>voltar</button>
    </a>
</table>

<br>

<form action="alterar-veiculo.php" method="get">
    <label for="id">ID do veículo a ser alterado:</label>
    <input type="number" id="id" name="id" required>
    <input type="submit" value="Alterar">
</form>

<br>

<form id="form" action="excluir-veiculo.php" method="get">
<label for="id">Exluir:</label>
    <input type="number" name="id" id="excluir">
 
    <button type="submit" id="btn-excluir">Excluir</button>
</form>

<script>
function confirmarExclusao() {
    // Pega o ID do carro do formulário
    const id = document.getElementById("excluir").value;

    // Verifica se o ID foi informado
    if (!id) {
        alert("Não foi informado o ID do veículo a ser excluído.");
        return false;
    }

    // Exibe uma caixa de diálogo de confirmação
    const confirmacao = window.confirm(`
        Tem certeza que deseja excluir o veículo com o ID ${id}?

        Essa ação é irreversível.
    `);

    // Se o usuário confirmar, envia o formulário
    if (confirmacao) {
        document.getElementById("form").submit();
    }
}

// Adiciona um evento de clique ao botão "Excluir"
document.getElementById("btn-excluir").addEventListener("click", confirmarExclusao);
</script>
<br>
<a href="adicionar-carro.php">
    <button type="submit" class="btn btn-warning" > Adicionar mais carro </button>
</a>

    
</body>
</html>
