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
    function listarRegistros()
    {
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

    function adicinarRegistros()
    {
        // Estabelecendo a conexão com o banco de dados
        $localhost = "localhost";
        $user = "root";
        $password = "";
        $dbname = "listardados";
        $conn = mysqli_connect($localhost, $user, $password, $dbname);

        // Inserindo informações no banco de dados
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

            if (mysqli_query($conn, $sql)) {
                echo "Informações inseridas com sucesso";
            } else {
                echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        // Fechando a conexão com o banco de dados
        mysqli_close($conn);
    }
    ?>

    <div class="container">
        <h1 class="my-4">Exemplo de Lista:</h1>
        <form method="post" class="row">
            <div class="form-group col">
                <label for="name">Nome:</label>
                <input type="text" class="form-control form-control-sm" id="name" name="name">
            </div>
            <div class="form-group col">
                <label for="email">Email:</label>
                <input type="text" class="form-control form-control-sm" id="email" name="email">
            </div>
            <div class="form-group col-auto">
                <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
                <?php
                if (isset($_POST['submit'])) {
                    adicinarRegistros();
                }
                ?>
            </div>
        </form>
        <hr>
        <h2 class="my-4">Lista de dados:</h2>
        <div class="row">
            <div class="col">
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
        </div>
    </div>
</body>

</html>