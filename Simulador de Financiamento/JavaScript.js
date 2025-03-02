function calcularParcelamento() {
    const rendaMensal = document.getElementById('rendaMensal').value.trim();
    const valorBem = document.getElementById('valorBem').value.trim();
    const valorEntrada = document.getElementById('valorEntrada').value.trim();
    const taxaJuros = document.getElementById('taxaJuros').value.trim();
    const numParcelas = document.getElementById('numParcelas').value.trim();

    if (!rendaMensal || !valorBem || !valorEntrada || !taxaJuros || !numParcelas) {
        alert("Confira os campos! Todos devem ser preenchidos corretamente.");
        return;
    }

    const rendaMensalNum = Number(rendaMensal);
    const valorBemNum = Number(valorBem);
    const valorEntradaNum = Number(valorEntrada);
    const taxaJurosNum = Number(taxaJuros);
    const numParcelasNum = Number(numParcelas);

    if (isNaN(rendaMensalNum) || isNaN(valorBemNum) || isNaN(valorEntradaNum) || isNaN(taxaJurosNum) || isNaN(numParcelasNum)) {
        alert("Confira os campos! Apenas números são permitidos.");
        return;
    }

    const jurosDecimal = taxaJurosNum / 100;
    const financiamento = valorBemNum - valorEntradaNum;
    const parcelaMensal = (financiamento * ((Math.pow(1 + jurosDecimal, numParcelasNum) * jurosDecimal) / (Math.pow(1 + jurosDecimal, numParcelasNum) - 1))).toFixed(2);

    const resultado = document.getElementById('resultado');
    resultado.innerHTML = ""; // Limpar resultado anterior
    
    const mensagem = document.createElement('p');
    mensagem.classList.add('mx-3', 'my-3');
    
    if (parcelaMensal <= (0.3 * rendaMensalNum)) {
        mensagem.textContent = `Cada parcela sai a R$ ${parcelaMensal} por mês.`;
    } else {
        mensagem.textContent = "O valor da parcela excede 30% da sua renda mensal.";
    }
    resultado.appendChild(mensagem);
}