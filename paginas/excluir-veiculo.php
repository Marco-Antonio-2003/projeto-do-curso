<?php
include 'classes/Conexaobd.php'; // Inclui o arquivo que contém a classe Conexaobd

$id_excluir = null;

if (isset($_GET["id"])) {
    $id_excluir = $_GET["id"];

    // Verifica se o ID foi informado
    if (!$id_excluir) {
        echo "Não foi informado o ID do veículo a ser excluído.";
        exit();
    }

    // Exclui o veículo
    $conexao = Conexaobd::pegarConexao();

    $query = "DELETE FROM tb_veiculos WHERE id = " . $id_excluir;

    $conexao->exec($query);

    // Redireciona o usuário para a página principal
    header("Location:adc-veiculos.php");
} else {
    echo "Não foi informado o ID do veículo a ser excluído.";
}

?>
