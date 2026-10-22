<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Pedro";
        $var2 = 5;
        echo $var2;

        $var2 = "José";
        echo $var2;

        echo "<br> Olá $var2 seja bem vindo";
        const PI = 3.1415;

        echo "o valor da constante PI é ".PI;

        //condições

        if ($var2 == PI)
        {
            echo "O número é o pi";
        }
        else
        {
                echo "O número não é";
        }

        $nota = 4;

        switch($nota)
        {
            case 1:
                echo "muito mal";
                break;
            case 2:
                echo "insuficiente";
                break;
            case 3:
                echo "suficiente";
                break;
            case 4:
                echo "boa";
                break;
            case 5: 
                echo "muito boa";
                break;
            default:
                echo "Nota incorreta";
                break;
        }
        //ciclos

        $c = 0;
        for ($i=1; $i<=10;$i++)
        {
            echo "<br> $c";
            $c++;
        }

        while ($c<=10)
        {
            echo "<br>$c";
            $c++;
        }

        //array e vetores

        $numeros = [4,5,6,3];
        $nomes = ["Pedro","Zé","Manuel","Rita"];

        foreach ($nomes as $nome)
        {
            echo "<br> $nome";
        }
        echo "<br> $nomes[2]";

        $pessoa = [
            "nome" => "Pedro felicio",
            "morada" => "Evora",
            "profissao" => "Professor",
            "email" => "pedro.felicio@aegp.edu.pt"
        ];

        echo "Nome:". $pessoa['nome'];

        //funções
        function Saudar ()
        {
            echo "Olá";
        }
        function Soma ($num1, $num2)
        {
            return $num1 + $num2;
        }

        Saudar();

        $sum = Soma(3,4);
        echo "<br>$sum";
    ?>
</body>
</html>