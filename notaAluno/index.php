<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <body>
    <div class="container text-center">
        <h1>Análise de Provas:</h1>
        <form action="saida.php" method="POST">
            <h4>Prova 1:</h4>
            <div class="form-group">
                <input type="number" class="form-control col-sm-4 mx-auto" name="prova1" id="prova1" required placeholder="Valor total">
            </div>
            <div class="form-group">
                <input type="number" class="form-control col-sm-4 mx-auto" name="nota1" id="nota1" required placeholder="Nota">
            </div>
            <h4>Prova 2:</h4>
            <div class="form-group">
                <input type="number" class="form-control col-sm-4 mx-auto" name="prova2" id="prova2" required placeholder="Valor total">
            </div>
            <div class="form-group">
                <input type="number" class="form-control col-sm-4 mx-auto" name="nota2" id="nota2" required placeholder="Nota">
            </div>
            <div class="form-group">
                <input type="submit" value="Calcular" class="btn btn-primary btn-block col-sm-4 mx-auto" />
            </div>
        </form>
    </div>
</body>
</html>