<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //apresentar notas
    $notas = [12,15,8,17,10,14,6,19,13,11];
    
    echo "<br>";
    
    echo "<br> ==== RELATÓRIO DA TURMA =====<br>";

    echo "<br>Número de Alunos: ".count($notas);
    CalcularMedia($notas);
    ContarAprovados($notas);
    ContarReprovados($notas);
    ObterMaiorNota($notas);
    ObterMenorNota($notas);
    ClassificarNota($notas);




    function ClassificarNota($notas)
    {
        foreach($notas as $nota)
            {
                if ($nota >= 0 && $nota <=9)
                {
                    echo "<br>". $nota . " - Reprovado";
                }
                else if($nota >= 10 && $nota <= 13)
                {
                    echo "<br>" .$nota . " - Suficiente";
                }
                else if ($nota >= 14 && $nota <=17)
                {
                    echo "<br>" .$nota . " - Bom";
                }
                else if ($nota >= 18 && $nota <= 20)
                {
                    echo "<br>" .$nota . " - Muito Bom";
                }
            }
    }
    function CalcularMedia($notas)
    {
        $soma = array_sum($notas);
        $contar = count($notas);  
        $media = $soma/$contar;

        echo "<br> A média da turma é: ". $media. "<br>";
    }
    function ContarAprovados($notas)
    {
        $contar = 0;
        foreach($notas as $nota)
            {
                if ($nota >= 10)
                    {
                        $contar++;
                    }
            }

        echo "<br>". $contar ." alunos foram aprovados";
    }
    function ContarReprovados($notas)
    {
        $contar = 0;
        foreach ($notas as $nota) {
            if ($nota < 10) {
                $contar++;
            }
        }

        echo "<br>" . $contar . " alunos foram reprovados<br>";
    }
    function ObterMaiorNota($notas)
    {
        $maiornota = 0;
        foreach($notas as $nota)
            {
                if($nota > $maiornota)
                    {
                        $maiornota = $nota;
                    }
            }
            echo "<br> A maior nota é: ". $maiornota;
    }
    function ObterMenorNota($notas)
    {
        $menornota = 50;
        foreach ($notas as $nota) {
            if ($nota < $menornota) {
                $menornota = $nota;
            }
        }
        echo "<br> A maior nota é: " . $menornota. "<br>";
    }
    ?>
</body>
</html>