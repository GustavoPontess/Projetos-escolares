# Simulador de Corrida 🏃‍♂️

## Descrição
O **Simulador de Corrida** é uma ferramenta que permite calcular a velocidade média e a quantidade de calorias gastas durante uma corrida, com base no tempo e na distância percorrida.

## Tecnologias Utilizadas 🛠️
- HTML (Interface)
- CSS (Estilização via Bootstrap)
- JavaScript (Cálculo e validação)

## Como Usar 📌
1. Abra o arquivo `index.html` no navegador.
2. Insira os valores nos campos:
   - **Nome**: Seu nome ou identificação.
   - **Peso**: Seu peso corporal (kg).
   - **Distância percorrida**: Distância total da corrida (km).
   - **Tempo**: Tempo total da corrida no formato `hh:mm:ss`.
3. Clique no botão **Calcular**.
4. O sistema exibirá sua **velocidade média** e a **quantidade estimada de calorias queimadas**.

## Exemplo de Entrada e Saída 📊
### **Cenário 1: Corrida de 5km em 30 minutos** ✅
- Nome: `João`
- Peso: `70`
- Distância percorrida: `5`
- Tempo: `00:30:00`
- **Saída esperada:** `Velocidade média de 10 km/h e aproximadamente 262.5 calorias queimadas.`

### **Cenário 2: Corrida longa de 10km em 1h15min** ✅
- Nome: `Maria`
- Peso: `60`
- Distância percorrida: `10`
- Tempo: `01:15:00`
- **Saída esperada:** `Velocidade média de 8 km/h e aproximadamente 450 calorias queimadas.`

## Estrutura do Projeto 📂
```
Simulador-de-Corrida/
│── index.html        # Interface da ferramenta
│── corrida_script.js # Lógica de cálculo e validação
│── background.png    # Imagem de fundo do projeto
│── corrida.png       # Imagem relacionada ao projeto
```