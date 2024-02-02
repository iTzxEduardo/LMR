// Posição inicial do elevador 1
let elevador1 = 1;

// Posição inicial do elevador 2
let elevador2 = 1;

const elevators = document.querySelectorAll('.elevator');

// Função para movimentar o elevador para um determinado andar
const moveElevator = (elevator, destination) => {
  // Define a altura de cada andar
  const floorHeight = 60;

  // Calcula a posição de destino correta com base na altura do andar
  const destinationPosition = (destination === 'T' ? 0 : 6 - destination) * floorHeight;

  // Anima o movimento do elevador usando a função requestAnimationFrame
  const animate = () => {
    // Obtém a posição atual do elevador
    const currentPosition = parseInt(elevator.style.top || 0, 10);

    // Calcula a próxima posição do elevador
    const nextPosition = currentPosition < destinationPosition ? currentPosition + 1 : currentPosition - 1;

    // Move o elevador para a próxima posição
    elevator.style.top = `${nextPosition}px`;

    // Verifica se chegou ao destino
    if (nextPosition !== destinationPosition) {
      // Continua a animação na próxima frame
      requestAnimationFrame(animate);
    } else {
      // Atualiza o andar atual do elevador ao chegar ao destino
      elevator.dataset.floor = destination;
    }
  };

  // Inicia a animação
  requestAnimationFrame(animate);
};

// Função para movimentar o Elevador 1 para um determinado andar
function moverElevador1(andarDestino) {
  const elevador1Element = elevators[0]; // Assumindo que o primeiro elevador é o elevador1

  // Verifica se o elevador1 já está no andar de destino
  if (elevador1 === andarDestino) {
    console.log(`Elevador 1 já está no ${andarDestino}º andar.`);
    return;
  }

  // Move o elevador1 para o andar de destino
  moveElevator(elevador1Element, andarDestino);

  // Atualiza a posição do elevador1
  elevador1 = andarDestino;

  // Atualiza o texto na página HTML indicando a movimentação do elevador1
  document.getElementById("resultado").innerText = `Movendo elevador 1 para o ${andarDestino}º andar.`;
}

// Função para movimentar o Elevador 2 para um determinado andar
function moverElevador2(andarDestino) {
  const elevador2Element = elevators[1]; // Assumindo que o segundo elevador é o elevador2

  // Verifica se o elevador2 já está no andar de destino
  if (elevador2 === andarDestino) {
    console.log(`Elevador 2 já está no ${andarDestino}º andar.`);
    return;
  }

  // Move o elevador2 para o andar de destino
  moveElevator(elevador2Element, andarDestino);

  // Atualiza a posição do elevador2
  elevador2 = andarDestino;

  // Atualiza o texto na página HTML indicando a movimentação do elevador2
  document.getElementById("resultado").innerText = `Movendo elevador 2 para o ${andarDestino}º andar.`;
}

// Exemplo de chamada para mover o elevador1 para o 3º andar
moverElevador1(3);

// Exemplo de chamada para mover o elevador2 para o 5º andar
moverElevador2(5);
