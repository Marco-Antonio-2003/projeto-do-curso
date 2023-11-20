<?php 
class Conexaobd
{
    public static function pegarConexao()
    {
        $dsn = 'mysql:host=localhost;dbname=alugue;user=root';
        $username = 'root';
        $password = '';

        $conexao = new PDO($dsn, $username, $password);
        return $conexao;
    }
}

?>