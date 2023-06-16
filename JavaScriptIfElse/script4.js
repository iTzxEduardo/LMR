let opercao;
let numero1, numero2;
opercao=prompt("Digite a operação desejada","+,-,*,/")
numero1=prompt("Digite um numero")
numero2=prompt("Digite um numero")
switch(opercao){
    case("+"):document.write( parseInt(numero1)+parseInt(numero2));
    break;
    case("-"):document.write( parseInt(numero1)-parseInt(numero2));
    break;
    case("*"):document.write( parseInt(numero1)*parseInt(numero2));
    break;
    case("/"):
    if (numero2==0){document.write("Não dividirás por zero");
}else{
    document.write(parseFloat(numero1)/parseFloat(numero2));
}
    break; 
default:document.write("Escolha uma operação valida")
}