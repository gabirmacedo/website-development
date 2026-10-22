//funções clásicas --> function nome (parametros)
function soma (num1,num2)   
{
    let resultado = num1 + num2;
    document.writeln(num1 +" + "+num2+" = "+resultado);
}

soma(2,3);

function subtracao (num1,num2)   
{
    return num1 - num2;
}

let resultado2 = subtracao(5,2);
document.writeln("O resultado da subtração é: " + resultado2);

//Parametros default

let arroxF = () => documents.writeln("Arroz de feijão");

