let pnome;
let psobrenome;
let number;
let email;
let password;
let password1;

function enviar() {

    pnome = document.getElementById("pnome").value;
    psobrenome = document.getElementById("psobrenome").value;
    number = document.getElementById("number").value;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    password1 = document.getElementById("password1").value;

    if(pnome==" "||psobrenome==" "||number==" "||email==" "||password==" "||password1==" "){
        alert("Preencha todas as informações")
    }
    else if(password==password1){

    } else{

        alert("Sua senha não corresponde ")
    }


}