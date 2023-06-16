let email1;
let email2;
let senha1;
let senha2;
let nome;
function enviar() {
    email1 = document.getElementById("email1").value;
    email2 = document.getElementById("email2").value;
    senha1 = document.getElementById("senha1").value;
    senha2 = document.getElementById("senha2").value;
    nome = document.getElementById("nome").value;
    if(email1==""||email2==""||senha1==""||senha2==""||nome==""){
        alert("Preencha todas as informações")
    }
    else if(email1==email2 && senha1==senha2){}
    else{
        alert("Seu email ou senha não corresponde ")
    }


}