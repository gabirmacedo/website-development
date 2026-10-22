const titulo = document.querySelector("#titulo");
const menu = document.querySelectorAll(".anav");
const principal = document.querySelector("main");
const okayb = document.querySelector("#okay");
const cancelarb = document.querySelector("#cancelar");
//const form = document.querySelector("#formaluno");
const img1 = document.querySelector("#img1");

titulo.style.color = "gold";
titulo.style.fontFamily = "arial";
titulo.style.fontSize = "70px";
/*form.style.backgroundColor = "lightgreen";
form.style.border = "solid 2px darkgreen";*/

const reset = document.createElement("button");
const subt = document.createElement("h3");
const img2 = document.createElement("img");

subt.innerText = "Formulário Aluno";
subt.style.color = "red";
subt.style.textDecoration = "solid 2px";

reset.innerText = "Reset";

//form.prepend(subt);
principal.append(reset);
//form.after(img);

reset.addEventListener("click", mudarFoto);

function mudarFoto() {
  principal.prepend(subt);
  img1.src = "img/flexpage1/logo1.png";
}
