//exercício 1

let peso = window.prompt("Digite o peso em pounds:");
let resultado = Math.round(Number(peso) * 0.453592);
window.alert(`O peso em kg é de ${resultado}kg.`);

let distancia = window.prompt("Digite a distancia em miles:");
resultado = Math.round((Number(distancia) * 1.60934));
window.alert(`A distancia em km é de ${resultado}km.`);

//exercício 2
let celcius = window.prompt("Digite a temperatura em celcius:");
resultado = Math.round((Number(celcius) * 9/5) + 32);
window.alert(`A temperatura em fahrenheit é de ${resultado}°F.`);

let fahrenheit = window.prompt("Digite a temperatura em fahrenheit:");
resultado2 = Math.round((Number(fahrenheit) - 32) * 5/9);
window.alert(`A temperatura em celcius é de ${resultado2}°C.`); 

//exercício 3
let area = window.prompt("Digite o raio de um circulo:");
resultado = Math.round(2 * 3.1426 * Number(area));
window.alert(`A circunferência do circulo é de ${resultado}.`);
resultado2 = Math.round(3.1426 * (Number(area) ** 2));
window.alert(`A área do circulo é de ${resultado2}.`);