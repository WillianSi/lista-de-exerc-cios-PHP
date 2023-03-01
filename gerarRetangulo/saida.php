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
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $char_borda = $_POST['char_borda'];
        $cor_borda = $_POST['cor_borda'];
        $char_preenchimento = $_POST['char_preenchimento'];
        $cor_preenchimento = $_POST['cor_preenchimento'];

        // Definindo estilo CSS para a borda
        $css_borda = "border: 0; font-family: Courier New; color: $cor_borda;";

        // Definindo estilo CSS para as células de preenchimento
        $css_preenchimento = "border: 0;font-family: Courier New; color: $cor_preenchimento;";

        echo "<h4>Retangulo gerado com sucesso</h4>";
        // Gerando borda para o retângulo
        echo "<table>";
        // Loop para gerar as linhas do retângulo
        for ($i = 1; $i <= $altura; $i++) {
            echo "<tr>";
            // Loop para gerar as células de cada linha
            for ($j = 1; $j <= $largura; $j++) {
                // Verificando se a célula é uma borda ou preenchimento
                if ($i == 1 || $i == $altura || $j == 1 || $j == $largura) {
                    echo "<td style='$css_borda'>$char_borda</td>";
                } else {
                    echo "<td style='$css_preenchimento'>$char_preenchimento</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>