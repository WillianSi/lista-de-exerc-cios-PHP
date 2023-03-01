<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-4 d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Fatorial</h1>
                <form action="saida.php" method="POST">
                    <div class="form-group">
                        <label for="fator">Numero (0 a 99):</label>
                        <input type="number" name="fator" id="fator" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                </form>
            </div>
</body>
</html>