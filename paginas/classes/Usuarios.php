<?php 
require_once 'classes/Conexaobd.php';

/*nome da classe*/
class Usuarios{

    /*atributos*/
    public $codigo;
    public $nome;
    public $sobrenome;
    public $cpf;
    public $nascimento;
    public $rua;
    public $bairro;
    public $cep;

    /* métodos */
    public function listar()
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "SELECT codigo, nome, sobrenome, cpf, nascimento, rua, bairro, cep FROM tb_usuarios";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($codigo)
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "SELECT codigo, nome, sobrenome, cpf, nascimento, rua, bairro, cep FROM tb_usuarios WHERE codigo = " . $codigo;

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            return $linha;
        }
    }

    public function inserir($codigo, $nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep)
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "INSERT INTO tb_usuarios(codigo, nome, sobrenome, cpf, nascimento, rua, bairro, cep) VALUES('" . $codigo . "','" . $nome . "','" . $sobrenome . "','" . $cpf . "','" . $nascimento . "','" . $rua . "','" . $bairro . "','" . $cep . "')";

        $conexao->exec($query);
    }

    public function alterar($codigo, $nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep)
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "UPDATE tb_usuarios SET nome = :nome, sobrenome = :sobrenome, cpf = :cpf, nascimento = :nascimento, rua = :rua, bairro = :bairro, cep = :cep WHERE codigo = :codigo";
        $stmt = $conexao->prepare($query);

        // Bind dos parâmetros
        $stmt->bindParam(':codigo', $codigo);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':nascimento', $nascimento);
        $stmt->bindParam(':rua', $rua);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cep', $cep);

        // Execute a query
        $stmt->execute();
    }

    public function excluir($codigo)
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "DELETE FROM tb_usuarios WHERE codigo = " . $codigo;

        $conexao->exec($query);
    }

    public function listarPorCodigo($codigo)
    {
        $conexao = Conexaobd::pegarConexao();

        $query = "SELECT codigo, nome, sobrenome, cpf, nascimento, rua, bairro, cep FROM tb_usuarios WHERE codigo = " . $codigo;

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserirNovoUsuario($nome, $sobrenome, $cpf, $nascimento, $rua, $bairro, $cep) {
        $conexao = Conexaobd::pegarConexao();

        // Prepare a query
        $query = "INSERT INTO tb_usuarios (nome, sobrenome, cpf, nascimento, rua, bairro, cep) VALUES (:nome, :sobrenome, :cpf, :nascimento, :rua, :bairro, :cep)";

        // Prepare a statement
        $stmt = $conexao->prepare($query);

        // Bind dos parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':nascimento', $nascimento);
        $stmt->bindParam(':rua', $rua);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cep', $cep);

        // Execute a query
        $stmt->execute();
    }

}


?>