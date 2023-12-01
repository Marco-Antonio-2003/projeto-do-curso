<?php
include('verificar-login.php');
require_once 'classes\Usuarios.php';
$categoria = new Usuarios();
$lista = $categoria->listar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<header>
    <div class="col-3">
        <a href="index.php"><img src="../img/logoSiteSmall.png" style="border-radius: 20px; width: 360px;"></a>
    </div>
</header>

<body>
    <br><br>
    <div class="container">
        <h1>Usuários:</h1>
        <div class="input-group">
            <input class="form-control" id="myInput" type="text" placeholder="pesquisar">
        </div>
        <br>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Código do Usuário</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>CPF</th>
                    <th>Nascimento</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>CEP</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="myTable">
                <?php foreach ($lista as $linha) { ?>
                    <tr>
                        <td><?php echo $linha['codigo']; ?></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['sobrenome']; ?></td>
                        <td><?php echo $linha['cpf']; ?></td>
                        <td><?php echo $linha['nascimento']; ?></td>
                        <td><?php echo $linha['rua']; ?></td>
                        <td><?php echo $linha['bairro']; ?></td>
                        <td><?php echo $linha['cep']; ?></td>
                        <td>
                            <a href="usu-alterar.php?codigo=<?php echo $linha['codigo']; ?>" class="btn btn-warning" style="margin:10px">Alterar</a>
                            <br>
                            <a href="usu-excluir.php?CODIGO=<?php echo $linha['codigo']; ?>" class="btn btn-danger" style="margin:10px">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br><br>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>