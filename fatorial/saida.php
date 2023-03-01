<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="text-align: center;">
        <?php
        //Recebe o valor numérico especificado no campo texto "fator" da página index.php
        $fator = $_POST['fator'];

        //Função Recursiva para calcular o fatorial do número fornecido
        function calcular_fatorial($numero)
        {
            if ($numero == 1) {
                return 1;
            } else {
                return $numero * calcular_fatorial($numero - 1);
            }
        }

        $resultado = calcular_fatorial($fator);

        echo '<h4>O Fatorial de ' . $fator . ' é => ' . $fator;
        for ($i = $fator - 1; $i > 1; $i--) {
            echo "* $i";
        }
        echo " = " . $resultado . '<h4>';

        ?>

    </div>
</body>