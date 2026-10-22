let nome = window.prompt("Digite seu nome:");
let idade = window.prompt("Digite sua idade:");

window.alert("Olá " + nome + ", você tem " + idade + " anos.");
window.alert(nome.length);

window.alert(nome.toUpperCase());
window.alert(nome.substring(2,6));
window.alert(nome.split(" "));

let nomes = nome.split(" ");
window.alert(nome[1]);
windows.alert(nomes.includes("Daniel"));

let num1 = window.prompt("Digite o primeiro número:");
let num2 = window.prompt("Digite o segundo número:");

let soma = Number(num1) + Number(num2);

window.alert("A soma de " + num1 + " e " + num2 + " é igual a " + String(soma) + ".");

//Template Strings

window.alert(`A soma de ${num1}, com ${num2} é de ${soma}.`);

//Opweradores Aritméticos

// + - * / 
// % resto da divisão 
// ** expoente 2**2 (2 elevado a 2) = 4
//Usam PEMDAS