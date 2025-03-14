# 💰 Loan Simulator

## 📖 Sobre o Projeto
O **Loan Simulator** é uma aplicação que permite calcular o valor das parcelas de um financiamento com base na renda do usuário, valor do bem, entrada, taxa de juros e número de parcelas. O sistema utiliza a fórmula de juros compostos para exibir um resultado preciso e informativo.

## 🛠 Tecnologias Utilizadas
- **HTML5** - Estrutura da página
- **CSS3** - Estilização e layout
- **JavaScript** - Lógica de cálculo do financiamento

## 📂 Estrutura do Projeto
```
loan-simulator/
│── index.html                # Página principal do simulador
│── README.md                 # Documentação do projeto
│── public/                   # Recursos visuais e scripts
│   ├── images/
│   │   ├── background.png    # Imagem de fundo
│   │   ├── finan.png         # Ilustração do simulador
│   ├── scripts/
│   │   ├── main.js           # Script principal do simulador
```

## 🏦 Como Usar
1. Abra o arquivo `index.html` em um navegador.
2. Insira os seguintes dados:
   - **Renda mensal**
   - **Valor do bem**
   - **Valor da entrada**
   - **Taxa de juros (%)**
   - **Número de parcelas**
3. Clique no botão para calcular o parcelamento.
4. O sistema exibirá o valor da parcela estimada.

## 📊 Exemplo de Entrada e Saída 📊
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

## 📊 Funcionalidades
✅ Cálculo do valor das parcelas utilizando a fórmula de juros compostos.
✅ Validação dos dados inseridos pelo usuário.
✅ Interface simples para entrada de informações.

---
📌 **Observação:** O projeto pode ser expandido com funcionalidades adicionais, como comparação entre diferentes taxas de juros, histórico de simulações e integração com APIs de instituições financeiras.