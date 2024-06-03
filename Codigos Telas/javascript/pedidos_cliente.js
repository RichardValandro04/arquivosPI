//Capturando linhas da tabela
const linhas_table = document.querySelectorAll(".linha_tabela")


//Evento aplicado a todas as linhas da tabela para quando elas forem clicadas
linhas_table.forEach(function(linha) {
    linha.addEventListener("click", () => {alert("Em Breve, detalhe dos pedidos")})
})