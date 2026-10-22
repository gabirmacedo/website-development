//exercício 1

const valores = new Array (1,2,3,4,5,6,7,8,9,10);
let soma=0;
for (let i = 0; i < valores.length; i++) {
    soma += valores[i];
}
document.writeln("A soma de todos os valores é: " + soma);    
document.writeln("<br>");

//exercício 2
let menor = valores[0];
let maior = valores[0];

for (let i = 0; i < valores.length; i++) {
    
    if (maior < valores[i]) {
        maior = valores[i];
    }
    else if (menor > valores[i]) {
        menor = valores[i];
    }
}
document.writeln("O maior valor é: " + maior);
document.writeln("<br>");
document.writeln("O menor valor é: " + menor);
document.writeln("<br>");

//exercício 3

let somaPares = 0;

for (let i = 0; i < valores.length; i++) {
    if (valores[i] % 2 === 0) {
        somaPares ++;
    }
}
document.writeln("A soma dos valores pares é: " + somaPares);
document.writeln("<br>");