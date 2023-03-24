<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
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

// Listando os registros do banco de dados
listarRegistros();

// Fechando a conexão com o banco de dados
mysqli_close($conn);
?>
</body>
</html>