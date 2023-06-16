let HT; // horas trabalhadas
let VH;//valor hora
let PD;//percentual de descontos
let SB;//salário bruto
let SL;//salário líquidp

HT = prompt("Digite as horas trabalhadas:" , "Informe aqui");
VH = prompt("Entre com o valor da hpra:" , "em porcentagem");
PD = prompt("Informe o percentual de descontos" , "em porcentagem");
SB = parseFloat(HT)*parseFloat(VH);
TD = parseFloat(PD)*SB/100;
SL = SB - TD;
document.write("Salario = " , SL);
