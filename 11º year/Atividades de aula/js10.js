const titulo = document.querySelector("#titulo");
const anav = document.querySelectorAll(".anav");
const principal = document.querySelector("main");
const okay = document.querySelector("#okay");
const cancelar = document.querySelector("#cancelar");
const form = document.querySelector("#formaluno");
const imgagem = document.querySelector("#img");
 
tit.style.color = "gold";
tit.style.fontFamily = "arial";
tit.style.fontSize = "70px";
 
form.style.backgroundcolor="pink";
form.style.border="solid 2px darkpink";
 
img1.src="img/foto.jpg";
 
const cancel = document.createElement("button");
const h3 = document.createElement("h3");
const h2 = document.createElement("h2");
const imgagem = document.createElement("img");
 
subt.classList.add()="sub";
subtitulo3.classList.add()="subtitulo";
 
subtitulo3.innerText = "Formulário Aluno";
sub.innerText = "Formulário Aluno";
 
form.before(subtitulo);
form.after(subtitulo3);
subt.style.color = "pink";
subt.style.textDecoration="solid 2px";
 
cancel.value="Cancel";
 
form.after(cancel);
form.prepend(subt);
 
form.before(img2.cloneNode());
//form.after(img2);
cancel.addEventListener("clik",mudarFoto);
function mudarFoto()
{
    img1.src="img/mental.png"    
}
img2.src="drexel.png";