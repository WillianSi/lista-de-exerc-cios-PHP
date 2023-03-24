<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Exemplo de formulário</title>
</head>

<body>

    <?php 
    function listarRegistros() {
        // Estabelecendo a conexão com o banco de dados
        $localhost = "localhost";
        $user = "root";
        $password = "";
        $dbname = "listardados";
    
        $conn = mysqli_connect($localhost, $user, $password, $dbname);
    
        // Verificando se a conexão foi estabelecida com sucesso
        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
    
        // Executando a query SELECT para buscar os registros do banco de dados
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);
    
        // Verificando se a query retornou resultados
        if (mysqli_num_rows($result) > 0) {
            // Exibindo os registros retornados pela query
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum registro encontrado</td></tr>";
        }
    
        // Fechando a conexão com o banco de dados
        mysqli_close($conn);
    }
    ?>

    <div class="container">
        <h1 class="my-4">Exemplo de Lista:</h1>
        <form action="inserir.php" method="post">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <hr>
        <h2 class="my-4">Lista de dados:</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php listarRegistros(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>