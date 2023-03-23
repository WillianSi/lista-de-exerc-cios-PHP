<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Exemplo de formulário</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">Exemplo de Lista:</h1>
        <form action="saida.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control" id="idade" name="idade">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <hr>
        <h2 class="my-4">Lista de dados:</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Estabelecendo a conexão com o banco de dados
                $servername = "localhost";
                $username = "seunome";
                $password = "suasenha";
                $dbname = "nomeDoBancoDeDados";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    die("Conexão falhou: " . mysqli_connect_error());
                }

                // Inserindo informações no banco de dados
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];

                    $sql = "INSERT INTO tabela (nome, idade) VALUES ('$nome', $idade)";

                    if (mysqli_query($conn, $sql)) {
                        echo "Informações inseridas com sucesso";
                    } else {
                        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }

                // Exibindo informações do banco de dados
                $sql = "SELECT nome, idade FROM tabela";
                $resultado = mysqli_query($conn, $sql);

                if (mysqli_num_rows($resultado) > 0) {
                    echo "<table><tr><th>Nome</th><th>Idade</th></tr>";
                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "<tr><td>" . $linha["nome"] . "</td><td>" . $linha["idade"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Nenhum resultado encontrado";
                }

                // Fechando a conexão com o banco de dados
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>