<?php 
require_once 'classes/Conexaobd.php';

class Veiculos
{
    public $id;
    public $nome;
    public $marca;
    public $modelo;
    public $ano;
    public $motorizacao;
    public $combustivel;
    public $direcao;
    public $cambio;
    public $portas;
    public $foto;
    public $ar;
    public $abs;    
    public $alugado;

    public function listarStatusAlugado()
{
    $conexao = Conexaobd::pegarConexao();
    $query = "SELECT id, nome, marca, modelo, ano, motorizacao, combustivel, direcao, cambio, portas, foto, ar, abs, alugado
            FROM tb_adicionar_carro
            WHERE alugado = 1;";
    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();
    return $lista;
}


    public function inserir($id, $nome, $marca, $modelo, $ano, $motorizacao, $combustivel, $direcao, $cambio, $portas, $foto, $ar, $abs, $alugado)
    {
        $conexao = Conexaobd::pegarConexao();
        $query = "INSERT INTO tb_adicionar_carro (id, nome, marca, modelo, ano, motorizacao, combustivel, direcao, cambio, portas, foto, ar, abs, alugado) 
                  VALUES(:id, :nome, :marca, :modelo, :ano, :motorizacao, :combustivel, :direcao, :cambio, :portas, :foto, :ar, :abs, :alugado)";
        
        if (!is_string($alugado) || ($alugado != "disp" && $alugado != "0")) {
            throw new Exception("O alugado deve ser uma var e igual a '0' ou '1'.");
        }

        $stmt = $conexao->prepare($query);
        $stmt->execute([
            ':id' => $id,
            ':nome' => $nome,
            ':marca' => $marca,
            ':modelo' => $modelo,
            ':ano' => $ano,
            ':motorizacao' => $motorizacao,
            ':combustivel' => $combustivel,
            ':direcao' => $direcao,
            ':cambio' => $cambio,
            ':portas' => $portas,
            ':foto' => $foto,
            ':ar' => $ar,
            ':abs' => $abs,
            ':alugado' => $alugado,
        ]);
    }

    public function alterar($id, $nome, $marca, $modelo, $ano, $motorizacao, $combustivel, $direcao, $cambio, $portas, $foto, $ar, $abs, $alugado)
    {
        $conexao = Conexaobd::pegarConexao();
        $query = "UPDATE tb_adicionar_carro 
                  SET nome = :nome, marca = :marca, modelo = :modelo, ano = :ano, motorizacao = :motorizacao, 
                  combustivel = :combustivel, direcao = :direcao, cambio = :cambio, portas = :portas, foto = :foto, ar = :ar, abs = :abs, alugado = :alugado 
                  WHERE id = :id";
        
        if (!is_string($alugado) || ($alugado != "0" && $alugado != "1")) {
            throw new Exception("O alugado deve ser uma var e igual a '0' ou '1'.");
        }

        $stmt = $conexao->prepare($query);
        $stmt->execute([
            ':nome' => $nome,
            ':marca' => $marca,
            ':modelo' => $modelo,
            ':ano' => $ano,
            ':motorizacao' => $motorizacao,
            ':combustivel' => $combustivel,
            ':direcao' => $direcao,
            ':cambio' => $cambio,
            ':portas' => $portas,
            ':foto' => $foto,
            ':ar' => $ar,
            ':abs' => $abs,
            ':alugado' => $alugado,
            ':id' => $id,
        ]);
    }

    public function excluir($id)
    {
        $conexao = Conexaobd::pegarConexao();
        $query = "DELETE FROM tb_adicionar_carro WHERE id = :id";
        $stmt = $conexao->prepare($query);
        $stmt->execute([':id' => $id]);
    }

    public function listarPorID($id)
    {
        if ($id === null) {
            return null;
        }

        $conexao = Conexaobd::pegarConexao();
        $query = "SELECT id, nome, marca, modelo, ano, motorizacao, combustivel, direcao, cambio, portas, foto, ar, abs, alugado 
                  FROM tb_adicionar_carro 
                  WHERE id = :id";

        $stmt = $conexao->prepare($query);
        $stmt->execute([':id' => $id]);
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function listarTodos()
    {
        $conexao = Conexaobd::pegarConexao();
        $query = "SELECT id, nome, marca, modelo, ano, motorizacao, combustivel, direcao, cambio, portas, foto, ar, abs, alugado 
                  FROM tb_adicionar_carro";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function alugarVeiculo($idVeiculo)
{
    $conexao = Conexaobd::pegarConexao();
    $query = "UPDATE tb_adicionar_carro SET alugado = 1 WHERE id = :id";
    $stmt = $conexao->prepare($query);
    $stmt->execute([':id' => $idVeiculo]);
}

}

?>
