<?php 

//Arrays ou Vectores//

//Array Simples
$valores = [1,2,3,4];
$nome = ["Pedro","Daniel","Felício"];

echo "<br> $valores[3] $nome[2]";

//Array Associativo
$pessoa = [
    "nome" => "Pedro",
    "apelido" => "Felicio",
    "morada" => "Évora",
    "email" => "pedro.felicio@aegp.edu.pt"
];

echo "<br> Olá $pessoa[nome] $pessoa[apelido] morador de $pessoa[morada] <br>";

//Matrizes//

//Matrix Simples
$thematrix = [
    [1,2,4],
    ["Pedro","Daniel","Felício"],
    [true,true,false]
];

echo $thematrix[0][1];
echo $thematrix[1][2];
echo $thematrix[2][0];

//Matriz Associativas
$cidades = [
    "Portugal" => ["capital"=>"Lisboa","Porto","Évora"],
    "Brasil" => ["capital"=>"Brasília","Rio de Janeiro","São Paulo"],
    "Espanha" => ["capital"=>"Madrid","Barcelona","Valencia"]
];

echo $cidades["Portugal"][2];

//Ciclo Foreach//

foreach($valores as $v)
    echo "<br>" .$v;

//Funções//

function soma ($num2,$num1)
{
    $num3 = $num2+$num1;
    return $num3;
} 

echo "<br> Soma: ".soma(2,3);

function multi ($num1,$num2)
{
    echo "<br> Multiplicação:".$num1*$num2;
}

multi(3,5);

?>