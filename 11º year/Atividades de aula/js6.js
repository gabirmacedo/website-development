// Exercício 1
function CalcularIMC() {
    
    let peso = window.prompt("Digite o seu peso em kg:");
    let altura = window.prompt("Digite a sua altura em metros:");

    let imc = peso / (altura * altura);
    let resultado = "";
    if (imc < 18.5) {
        resultado = "Abaixo do peso";
    } else if (imc >= 18.5 && imc <= 25) {
        resultado = "Peso normal";
    } else if (imc > 25) {
        resultado = "Sobrepeso";
    } 
    document.writeln(resultado);
}

// Exercício 2
function VerificarAprovacao() 
{ 
    const notas = [];
    let resp= '';
    for (let i = 1; i <= notas.length; i++) 
    {
        let nota = window.prompt(`Digite a nota ${i}:`);
        windows.prompt(`adicionar mais notas? (s/n)`);
        resp *
        notas.push(nota);
    }

}

// Exercício 3

function tabuada(numero) {
    for (let i = 1; i <= 10; i++) {
        console.log(`${numero} x ${i} = ${numero * i}`);
    }
}

tabuada(5);

// Exercício 4

function estadoEncomenda(codigo) {
    switch (codigo) {
        case "pago":
            console.log("A sua encomenda está a ser preparada.");
            break;
        case "enviado":
            console.log("A sua encomenda saiu para entrega.");
            break;
        case "entregue":
            console.log("Encomenda concluída com sucesso.");
            break;
        default:
            console.log("Estado desconhecido. Contacte o suporte.");
    }
}

// Exercício 5

const produtos = [
    { nome: "Rato", preco: 20 },
    { nome: "Teclado", preco: 50 },
    { nome: "Monitor", preco: 150 }
];
const aplicarDesconto = (lista) => {
    lista.forEach(produto => {
        produto.preco = produto.preco * 0.9;
        console.log("O produto " + produto.nome + " custa agora " + produto.preco + "€");
    });
};
aplicarDesconto(produtos);