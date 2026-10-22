function html() {
    document.getElementById("t1").innerHTML = "HTML";
    document.getElementById("sec1").style.backgroundColor = "red";
    document.getElementById("sec1").style.color = "white";

    document.getElementById("img2").src = "HTML.png";
}

function css() {
    document.getElementById("t3").innerHTML = "CSS";
    document.getElementById("sec3").style.backgroundColor = "blue";
    document.getElementById("sec3").style.color = "white";

    document.getElementById("img4").src = "CSS.png";
}

function js() {
    document.getElementById("t5").innerHTML = "Javascript";
    document.getElementById("sec5").style.backgroundColor = "yellow";
    document.getElementById("sec5").style.color = "black";

    document.getElementById("img6").src = "JS.png";
}

function cor() {
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);

    document.body.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
}