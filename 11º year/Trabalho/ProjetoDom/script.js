const h1 = document.querySelector("#titulo");
const h2 = document.querySelector("#subtitulo");
const img = document.querySelector("#img");
const btagora = document.querySelector("#btagora");
const btok = document.querySelector("#btok");
const hora = document.querySelector("#hora");
const body = document.querySelector("body");
 
 
function horas(hora){
    if (hora > 24 || hora < 0){
        body.style.backgroundColor = "orange";
        h1.innerText ="Esse horário não existe";
        h1.style.color = "red";
        h2.innerText = "Insira uma hora válida";
        img.src ="img/error.png";
    }
    else if (hora == 0 || hora == 24){
        body.style.backgroundColor = "midnightblue";
        h1.innerText ="Boa noite";
        h1.style.color = "blueviolet";
        h2.innerText = "Agora é meia noite";
        img.src ="img/noite.png";
    }
    else if (hora >=1 && hora <=5){
        body.style.backgroundColor = "midnightblue";
        h1.innerText ="Bom dia";
        h1.style.color = "blueviolet";
        h2.innerText = "Agora são " + hora + " da manhã";
        img.src ="img/noite.png";
    }
    else if (hora >= 6 && hora <= 11){
        body.style.backgroundColor = "lightcyan";
        h1.innerText ="Bom dia";
        h1.style.color = "cadetblue";
        h2.innerText = "Agora são " + hora + " horas da manhã";
        img.src ="img/manhã.png";
    }
    else if (hora == 12){
        body.style.backgroundColor = "lightblue";
        h1.innerText ="Boa tarde";
        h1.style.color = "cyan";
        h2.innerText = "Agora é meio dia";
        img.src ="img/meiodia.png";
    }
    else if (hora >= 13 && hora <= 19){
        body.style.backgroundColor = "deepskyblue";
        h1.innerText ="Boa tarde";
        h1.style.color = "cyan";
        h2.innerText = "Neste momento são " + hora + " horas da tarde";
        img.src ="img/tarde.png";
    }
    else if (hora >= 20 && hora <= 23){
        body.style.backgroundColor = "midnightblue";
        h1.innerText ="Boa noite";
        h1.style.color = "blueviolet";
        h2.innerText = "Agora são " + hora + " horas da noite";
        img.src ="img/noite.png";
    }
}

btagora.addEventListener("click", function() {
    const data = new Date();
    horas(data.getHours());
})
btok.addEventListener("click", function() {
    horas(Number(hora.value));
})
window.onload = function() {
    const data = new Date();
    horas(data.getHours());
};