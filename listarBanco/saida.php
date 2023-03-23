<?php
	// Inclui o arquivo de conexão com o banco de dados
	include 'conexao.php';

	// Recebe os dados do formulário
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	// Insere os dados no banco de dados
	$sql = "INSERT INTO pessoas (nome, idade) VALUES ('$nome', '$idade')";
	mysqli_query($conn, $sql);

	// Fecha a conexão com o banco de dados
	mysqli_close($conn);

	// Redireciona de volta para a página inicial
	header("Location: index.html");
	exit();
?>