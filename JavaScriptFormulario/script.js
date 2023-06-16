
let valor1;
let valor2;
let resultado;

function somar(){
valor1 = document.getElementById("pv1").value;
valor2 = document.getElementById("pv2").value; 
    if (valor1 == "" || valor2 == "") {
        alert("Digite um numero ")
    }
    else {
        resultado = parseInt(valor1) + parseInt(valor2);
        aler("O resultado da soma é " + resultado)
    };
}
function sub(){
valor1 = document.getElementById("pv1").value;
valor2 = document.getElementById("pv2").value; 
    if (valor1 == "" || valor2 == "") {
        alert("Digite um numero ")
    }
    else {
        resultado = parseInt(valor1) - parseInt(valor2);
        aler("O resultado da subtração é " + resultado)
    };
}
function mult(){
valor1 = document.getElementById("pv1").value;
valor2 = document.getElementById("pv2").value; 
    if (valor1 == "" || valor2 == "") {
        alert("Digite um numero ")
    }
    else {
        resultado = parseInt(valor1) * parseInt(valor2);
        aler("O resultado da multiplicação é " + resultado)
    };
}
function div(){
valor1 = document.getElementById("pv1").value;
valor2 = document.getElementById("pv2").value; 

    if (valor1 == "" || valor2 =="") {
        alert("Digite um numero ")}
    else if(valor2==0){
        alert("Preencha todos os campos")
    }
    else {
        resultado = parseInt(valor1) / parseInt(valor2);
        aler("O resultado da divisão é " + resultado)
    };
}