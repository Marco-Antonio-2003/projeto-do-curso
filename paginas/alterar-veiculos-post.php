<?php
// Conectar ao banco de dados
require_once('classes\Conexaobd.php');
$conexao = Conexaobd::pegarConexao();

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $motorizacao = $_POST['motorizacao'];
    $combustivel = $_POST['combustivel'];
    $direcao = $_POST['direcao'];
    $cambio = $_POST['cambio'];
    $portas = $_POST['portas'];
    $foto = $_POST['foto'];
    $ar = $_POST['ar'];
    $abs = $_POST['abs'];
    $alugado = isset($_POST['alugado']) ? $_POST['alugado'] : '0';

    // Atualizar o veículo no banco de dados
    $query = "UPDATE tb_adicionar_carro 
              SET nome = :nome, marca = :marca, modelo = :modelo, ano = :ano, motorizacao = :motorizacao, 
                  combustivel = :combustivel, direcao = :direcao, cambio = :cambio, portas = :portas, foto = :foto, ar = :ar, abs = :abs, alugado = :alugado
              WHERE id = :id";
    $stmt = $conexao->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':motorizacao', $motorizacao);
    $stmt->bindParam(':combustivel', $combustivel);
    $stmt->bindParam(':direcao', $direcao);
    $stmt->bindParam(':cambio', $cambio);
    $stmt->bindParam(':portas', $portas);
    $stmt->bindParam(':foto', $foto);
    $stmt->bindParam(':ar', $ar);
    $stmt->bindParam(':abs', $abs);
    $stmt->bindParam(':alugado', $alugado);
    $stmt->execute();

    // Redirecionar para a página de visualização do veículo após a alteração
    header("Location: adc-veiculos.php?id=$id");
    exit();
}
?>
