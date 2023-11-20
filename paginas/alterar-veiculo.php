

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Veículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
        <h2>Alterar Veiculo</h2>
        <form action="alterar-veiculos-post.php" method="post">
        
            <input type="hidden" name="id" id="id" class="form-control" placeholder="ID" value="<?php echo $veiculo['id']; ?>" >
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" >
            </div>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" >
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo">
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="text" name="ano" id="ano" class="form-control" placeholder="Ano" >
            </div>
            <div class="form-group">
                <label for="motorizacao">Motorização:</label>
                <input type="text" name="motorizacao" id="motorizacao" class="form-control" placeholder="Motorização" >
            </div>
            <div class="form-group">
                <label for="combustivel">Combustível:</label>
                <input type="text" name="combustivel" id="combustivel" class="form-control" placeholder="Combustível">
            </div>
            <div class="form-group">
                <label for="direcao">Direção:</label>
                <input type="text" name="direcao" id="direcao" class="form-control" placeholder="Direção">
            </div>
            <div class="form-group">
                <label for="cambio">Câmbio:</label>
                <input type="text" name="cambio" id="cambio" class="form-control" placeholder="Câmbio" >
            </div>
            <div class="form-group">
                <label for="portas">Portas:</label>
                <input type="text" name="portas" id="portas" class="form-control" placeholder="Portas" >
            </div>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Código" >
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Status" >
            </div>
         
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
        <br>
        <a href="adc-veiculos.php">
                <button type="submit" class="btn btn-secondary">Voltar</button>
            </a>
    </div>

</body>
</html>
