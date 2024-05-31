// capturando itens de menu e adicionando evento de click
const botao_cardapio = document.querySelector(".botao_cardapio");
const botao_pedidos = document.querySelector(".botao_pedidos");
const botao_clientes = document.querySelector(".botao_clientes");

botao_clientes.addEventListener("click", () => {window.location.href = "/clientes_confeitaria.html"} )
botao_pedidos.addEventListener("click", () => {window.location.href = "/pedidos_confeiteira.html"})
botao_cardapio.addEventListener("click", () => {alert("Cardápio ainda em produção")} )