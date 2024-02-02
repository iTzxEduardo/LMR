// Posição inicial do elevador 1
let elevador1 = 1;

// Posição inicial do elevador 2
let elevador2 = 1;

const elevators = document.querySelectorAll('.elevator');



// Função chamada ao selecionar um andar
function selecionarAndar(andarSelecionado) {
  // Determina qual elevador está mais próximo do andar selecionado
  const andarMaisProximo = determinarElevadorMaisProximo(elevador1, elevador2, andarSelecionado);

  // Atualiza a posição do elevador selecionado para o andar escolhido
  if (andarMaisProximo === 1) {
    elevador1 = andarSelecionado;
  } else {
    elevador2 = andarSelecionado;
  }

  // Atualiza o texto na página HTML indicando qual elevador vai para qual andar
  document.getElementById("resultado").innerText = `Elevador ${andarMaisProximo} vai para ${andarSelecionado}`;
}

// Função para determinar qual elevador está mais próximo de um determinado andar
function determinarElevadorMaisProximo(posElevador1, posElevador2, andarSelecionado) {
  // Calcula a distância absoluta de cada elevador para o andar selecionado
  const distanciaElevador1 = Math.abs(posElevador1 - andarSelecionado);
  const distanciaElevador2 = Math.abs(posElevador2 - andarSelecionado);

  // Retorna o número do elevador mais próximo (1 ou 2)
  return distanciaElevador1 <= distanciaElevador2 ? 1 : 2;
}
