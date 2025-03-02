function calcularCorrida() {
    const nome = document.getElementById('nome').value.trim();
    const peso = parseFloat(document.getElementById('peso').value);
    const distancia = parseFloat(document.getElementById('distancia').value);
    const tempo = document.getElementById('tempo').value.trim();

    if (!nome || isNaN(peso) || isNaN(distancia) || !tempo) {
        alert("Por favor, preencha todos os campos corretamente.");
        return;
    }

    const tempoCorte = tempo.split(":");
    const horas = parseInt(tempoCorte[0]) || 0;
    const minutos = parseInt(tempoCorte[1]) || 0;
    const segundos = parseInt(tempoCorte[2]) || 0;
    const tempoTotalHoras = horas + (minutos / 60) + (segundos / 3600);

    if (tempoTotalHoras <= 0) {
        alert("O tempo deve ser maior que zero.");
        return;
    }

    const velocidadeMedia = (distancia / tempoTotalHoras).toFixed(2);
    const caloriasGastas = (peso * distancia * 0.75).toFixed(2);

    const resultado = document.getElementById('resultado');
    resultado.innerHTML = "";
    
    const mensagem = document.createElement('p');
    mensagem.classList.add('mx-3', 'my-3');
    mensagem.textContent = `${nome}, sua velocidade média foi de ${velocidadeMedia} km/h e você queimou aproximadamente ${caloriasGastas} calorias.`;
    resultado.appendChild(mensagem);
}
