<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div style="text-align: center;">
        <?php
        //Recebe o valor numérico especificado no campo texto 
        $prova1 = $_POST['prova1'];
        $prova2 = $_POST['prova2'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];


        $totalProva = $prova1 + $prova2;
        $totalAluno = $nota1 + $nota2;
        $porProva1 = ($nota1/$prova1)*100;
        $porProva2 = ($nota2/$prova2)*100;
        $porTotal = ($totalAluno/$totalProva)*100;

        function conceito($com)
        {
            if ($com < 60) {
                return "Pessimo";
            } 
            elseif ($com >= 60 && $com <= 69){
                return "Ruim";
            }
            elseif ($com >= 70 && $com <= 79){
                return "Bom";
            }
            elseif ($com >= 80 && $com <= 89){
                return "Ótimo";
            }
            else{
                return "Excelente";
            }
        }


        echo "<h4>O valor total das duas provas é de $totalProva pontos</h4>";
        echo "<h4>Em relação a prova 1, o aluno obteve ". number_format($porProva1, 0) . "% do total</h4>";
        echo "<h4>Em relação a prova 2, o aluno obteve ". number_format($porProva2, 0) . "% do total</h4>";
        echo "<h4>O aluno totalizou com as duas provas $totalAluno pontos</h4>";
        echo "<h4>A porcentagem obtida pelo aluno em função do total foi de ". number_format($porTotal, 0) . "%</h4>";
        echo "<h4>O conceito do aluno foi: ".conceito($porTotal)."</h4>";
        ?>

    </div>
</body>