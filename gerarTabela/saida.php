<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="text-align: center;">
        <?php
        // Recebendo dados de entrada
        $titulo = $_POST['titulo'];
        $espaco = $_POST['espaco'];
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
        $borda = $_POST['borda'];
        $fundo = $_POST['fundo'];
        $texto = $_POST['texto'];

        echo "<h4>$titulo</h4>";

        // Definindo estilo CSS para a tabela
        $css_tabela = "border: {$borda}px solid black; background-color: {$fundo}; color: {$texto}; width: {$espaco}px; margin: 0 auto;";

        // Gerando tabela
        echo "<table style='{$css_tabela}'>";
        // Loop para gerar as linhas da tabela
        for ($i = 1; $i <= $linhas; $i++) {
            echo "<tr>";
            // Loop para gerar as células de cada linha
            for ($j = 1; $j <= $colunas; $j++) {
                echo "<td style='{$css_tabela}'>Texto</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>