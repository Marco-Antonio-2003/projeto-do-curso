<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alugue";
    
$conn = new mysqli($servername, $username, $password, $dbname);
    
                // Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$pesquisar = $_POST['termo_pesquisa'];

$result = "SELECT * FROM tb_adicionar_carro WHERE nome LIKE '%$pesquisar%' OR marca LIKE '%$pesquisar%'";
$resultado = mysqli_query($conn, $result);

while ($rown_result = mysqli_fetch_array($resultado)){
    echo "Teste carro: " . $rown_result['nome, marco']."<br>";
}
header('Location: ver-mais-carro.php');


?>