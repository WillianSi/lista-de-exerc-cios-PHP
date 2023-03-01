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
                <h1 class="text-center">Gerador de Retângulos</h1>
                <form action="saida.php" method="POST">
                    <div class="form-group">
                        <label for="largura">Largura:</label>
                        <input type="number" name="largura" id="largura" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" id="altura" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="char_borda">Caractere da Borda:</label>
                        <input type="text" name="char_borda" id="char_borda" maxlength="1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cor_borda">Cor da Borda:</label>
                        <select name="cor_borda" id="cor_borda" class="form-control" required>
                            <option value="#FF0000">Vermelho</option>
                            <option value="#0000FF">Azul</option>
                            <option value="#008000">Verde</option>
                            <option value="#FFFF00">Amarelo</option>
                            <option value="#000000">Preto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="char_preenchimento">Caractere de Preenchimento:</label>
                        <input type="text" name="char_preenchimento" id="char_preenchimento" maxlength="1" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cor_preenchimento">Cor do Preenchimento:</label>
                        <select name="cor_preenchimento" id="cor_preenchimento" class="form-control" required>
                            <option value="#FF0000">Vermelho</option>
                            <option value="#0000FF">Azul</option>
                            <option value="#008000">Verde</option>
                            <option value="#FFFF00">Amarelo</option>
                            <option value="#000000">Preto</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Gerar</button>
                </form>
            </div>
</body>

</html>