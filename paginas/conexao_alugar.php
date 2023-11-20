<?php
require_once 'classes/Veiculos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter dados do formulário
    $idVeiculo = $_POST['idVeiculo'];
    // Obter outros dados do cliente e método de pagamento

    // Instanciar a classe Veiculos
    $veiculo = new Veiculos();

    try {
        // Atualizar status para "alugado" no banco de dados
        $veiculo->alugarVeiculo($idVeiculo);

        echo "Carro alugado com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao processar o aluguel: " . $e->getMessage();
    }
} else {
    echo "Método inválido para processar o aluguel.";
}
include("index.php");
?>
