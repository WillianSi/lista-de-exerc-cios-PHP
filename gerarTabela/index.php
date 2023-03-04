<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="container mt-5 d-flex justify-content-center">
        <form action="saida.php" method="POST">
            <h1 class="text-center ">Gerador de tabelas</h1>
            <div class="form-group">
                <label for="titulo">Título da tabela:</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="espaco">Espaço ocupado pela tabela:</label>
                <select name="espaco" class="form-control">
                    <option value="200">20%</option>
                    <option value="400">40%</option>
                    <option value="600">60%</option>
                    <option value="800">80%</option>
                    <option value="1000">100%</option>
                </select>
            </div>

            <div class="form-group">
                <label for="linhas">Quantidade de linhas:</label>
                <input type="number" name="linhas" class="form-control">
            </div>

            <div class="form-group">
                <label for="colunas">Quantidade de colunas:</label>
                <input type="number" name="colunas" class="form-control">
            </div>

            <div class="form-group">
                <label for="borda">Tamanho da borda:</label>
                <input type="number" name="borda" class="form-control">
            </div>

            <div class="form-group">
                <label for="fundo">Cor de fundo da tabela:</label>
                <select name="fundo" class="form-control">
                    <option value="#FF0000">Vermelho</option>
                    <option value="#0000FF">Azul</option>
                    <option value="#008000">Verde</option>
                    <option value="#FFFF00">Amarelo</option>
                    <option value="#000000">Preto</option>
                </select>
            </div>

            <div class="form-group">
                <label for="texto">Cor do texto da tabela:</label>
                <select name="texto" class="form-control">
                    <option value="#FF0000">Vermelho</option>
                    <option value="#0000FF">Azul</option>
                    <option value="#008000">Verde</option>
                    <option value="#FFFF00">Amarelo</option>
                    <option value="#000000">Preto</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Gerar</button>
        </form>
    </div>
</body>

</html>