// a) 

let soma = 0;
for (let cont = 1; cont < 6; cont++) {
   let resultado = window.prompt("Digite o " + cont +"º número:");
    soma= soma + Number(resultado);
}

// b)

let estrela = "*";
for (let cont = 1; cont < 9; cont++) {
   document.writeln(estrela);
   document.writeln("<br>");
   estrela = estrela + "*";
   
}

// c)
let a = window.prompt("Digite o primeiro número:");
let b = window.prompt("Digite o segundo número:");

let x = a;
let y = b;

while (y !== 0) {
  let resto = x % y;
  x = y;
  y = resto;
}

document.writeln("O mdc é igual a: ", x);
document.writeln("<br>");

let mmc = (a * b) / x;

document.writeln("O mmc é igual a: ", mmc);