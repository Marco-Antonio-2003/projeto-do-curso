<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Veículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Adicionar Veículo</h2>
    <form action="adicionar-carro-post.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" class="form-control" placeholder="Marca" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" class="form-control" placeholder="Modelo" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano:</label>
            <input type="text" name="ano" class="form-control" placeholder="Ano" required>
        </div>
        <div class="form-group">
            <label for="motorizacao">Motorização:</label>
            <input type="text" name="motorizacao" class="form-control" placeholder="Motorização" required>
        </div>
        <div class="form-group">
            <label for="combustivel">Combustível:</label>
            <input type="text" name="combustivel" class="form-control" placeholder="Combustível" required>
        </div>
        <div class="form-group">
            <label for="direcao">Direção:</label>
            <input type="text" name="direcao" class="form-control" placeholder="Direção" required>
        </div>
        <div class="form-group">
            <label for="cambio">Câmbio:</label>
            <input type="text" name="cambio" class="form-control" placeholder="Câmbio" required>
        </div>
        <div class="form-group">
            <label for="portas">Portas:</label>
            <input type="text" name="portas" class="form-control" placeholder="Portas" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="foto" class="form-control" placeholder="URL da Foto" required>
        </div>
        <div class="form-group">
            <label for="ar">Ar Condicionado:</label>
            <select name="ar" class="form-control" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="abs">ABS:</label>
            <select name="abs" class="form-control" required>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" class="form-control" placeholder="Preço em decimal" required>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Veículo</button>
        
    </form>
</div>
<a href="adc-veiculos.php">
    <button type="submit" class="btn btn-warning" > Voltar </button>
</a>

</body>
</html>
