<?php 
include('verificar-login.php');
require_once 'classes\Usuarios.php';
$categoria= new Usuarios();
$lista = $categoria->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenciar usuarios</title>
</head>
<body>
<br><br>
<table class="table">
    <h1>Usuarios: </h1>
    <a href="index.php">
        <button>Voltar</button>
    </a>
    <thead>
        <td bgcolor="#CDC9C9"><b>Codigo Usuario:</b></td>
        <td bgcolor="#CDC9C9"><b>Nome:</b></td>
        <td bgcolor="#CDC9C9"><b>Sobrenome:</b></td>
        <td bgcolor="#CDC9C9"><b>CPF:</b></td>
        <td bgcolor="#CDC9C9"><b>Nascimento:</b></td>
        <td bgcolor="#CDC9C9"><b>Rua:</b></td>
        <td bgcolor="#CDC9C9"><b>Bairro:</b></td>
        <td bgcolor="#CDC9C9"><b>CEP:</b></td>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha['codigo'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['sobrenome'];?></td>
            <td><?php echo $linha['cpf'];?></td>
            <td><?php echo $linha['nascimento'];?></td>
            <td><?php echo $linha['rua'];?></td>
            <td><?php echo $linha['bairro'];?></td>
            <td><?php echo $linha['cep'];?></td>

            <td>
                <a href="usu-alterar.php"><button>Alterar</button></a>
                <br>
                <a href="usu-excluir.php?CODIGO=<?php echo $linha['codigo'];?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
</body>
</html>