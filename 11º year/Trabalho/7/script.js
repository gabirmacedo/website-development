
const principal = document.querySelector("main");
const okayb = document.querySelector("#okay");
const cancelarb = document.querySelector("#cancelar");
const reset = document.createElement("button");
const subt = document.createElement("h3");
const img2 = document.createElement("img");

subt.innerText = "Formulário Aluno";
subt.style.color = "red";
subt.style.textDecoration = "solid 2px";

reset.addEventListener("click", mudarFoto);

function mudarFoto() {
  principal.prepend(subt);
  img1.src = "img/flexpage1/logo1.png";
}
