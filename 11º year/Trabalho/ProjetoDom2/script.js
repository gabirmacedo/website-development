const h1 = document.querySelector("#titulo");
const img_principal = document.querySelector("#img_principal");
const bt_pedra = document.querySelector("#pedra");
const bt_papel = document.querySelector("#papel");
const bt_tesoura = document.querySelector("#tesoura");
const bt_novojogo = document.querySelector("#novojogo");
let ai = 0, player = 0;

/*///////////////////////////////////////////////////*/

function jogar(escolha) {
    const random = Math.floor(Math.random() * 3); 

    if(escolha === 0) {
        img_principal.src = "img/pedra.png";
    } else if (escolha === 1) {
        img_principal.src = "img/papel.png";
    } else {
        img_principal.src = "img/tesoura.png";
    }  
    if ((random === 0 && escolha === 2 )|| (random === 1 && escolha === 0 )|| (random === 2 && escolha === 1)) {
        ai++;
        h1.innerText = "Jogador : " + player + "  Ai : " + ai; 

    } 
    else if ((escolha === 0 && random === 2) || (escolha === 1 && random === 0) || (escolha === 2 && random === 1)) {
        player++;
        h1.innerText = "Jogador : " + player + "  Ai : " + ai; 

    }  
    else {
        h1.innerText = "Jogador : " + player + "  Ai : " + ai + "  - Empate!";

    }  
}  

/*///////////////////////////////////////////////////*/ 

bt_pedra.addEventListener("click", function() {
    jogar(0);
});

bt_papel.addEventListener("click", function() {
    jogar(1);
});

bt_tesoura.addEventListener("click", function() {
    jogar(2);
});

bt_novojogo.addEventListener("click", function() {
    ai = 0;
    player = 0;
    h1.textContent = "Pedra/Papel/Tesoura";
    img_principal.src = "img/RPS.png";
});