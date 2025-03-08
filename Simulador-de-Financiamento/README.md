# calFinan 🏦

## Descrição
O **calFinan** é uma calculadora de financiamento que permite calcular o valor das prestações com base na renda mensal, valor do bem, entrada, taxa de juros e número de prestações.

Este projeto pode ser utilizado para avaliar a viabilidade de um financiamento, garantindo que a parcela mensal esteja dentro de um limite seguro de renda.

## Tecnologias Utilizadas 🛠️
- HTML (Interface)
- CSS (Estilização via Bootstrap)
- JavaScript (Cálculo e validação)

## Como Usar 📌
1. Abra o arquivo `index.html` no navegador.
2. Insira os valores nos campos:
   - **Renda mensal**: Valor total recebido mensalmente.
   - **Valor do bem**: Preço total do bem a ser financiado.
   - **Valor da entrada**: Valor pago de entrada para reduzir o financiamento.
   - **Taxa de juros**: Percentual de juros aplicado ao financiamento.
   - **Número de prestações**: Quantidade de parcelas desejada.
3. Clique no botão **Calcular**.
4. O sistema mostrará o valor da parcela e se o financiamento é viável considerando 30% da renda mensal.

## Exemplo de Entrada e Saída 📊
### **Cenário 1: Financiamento dentro do limite** ✅
- Renda mensal: `5000`
- Valor do bem: `20000`
- Entrada: `5000`
- Taxa de juros: `2%`
- Parcelas: `24`
- **Saída esperada:** `Cada parcela sai a R$ 793.07 por mês.`

### **Cenário 2: Financiamento acima do limite** ❌
- Renda mensal: `3000`
- Valor do bem: `25000`
- Entrada: `5000`
- Taxa de juros: `3%`
- Parcelas: `36`
- **Saída esperada:** `O valor da parcela excede 30% da sua renda mensal.`

## Estrutura do Projeto 📂
```
Simulador-de-Financiamento/
├── assets/
│   ├── img/
│   │   ├── finan.png
│   ├── js/
│   │   ├── JavaScript.js
├── index.html       # Página principal do simulador
├── README.md        # Documentação do projeto
```
