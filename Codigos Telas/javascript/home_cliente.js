//Capturando o botão de sair
const botao_sair = document.querySelector(".botao_sair");

// Adicionando evento de click para retornar ao index.html
botao_sair.addEventListener("click", () => {window.location.href = "/index.html"});


//Capturando os 3 itens de menu
const meus_dados = document.querySelector(".meus_dados");
const meus_pedidos = document.querySelector(".meus_pedidos");
const cardapio = document.querySelector(".cardapio");

//Adicionando eventos de click
meus_dados.addEventListener("click", () => {window.location.href = "/dados_cliente.html"} );
meus_pedidos.addEventListener("click", () => {window.location.href = "/pedidos_cliente.html"} );
cardapio.addEventListener("click", () => {window.location.href = "/cardapio_cliente.html"} );


// Capturando os botões de redes sociais 
const instagram = document.querySelector(".logo_instagram")
const whatsapp = document.querySelector(".logo_whatsapp")

// Definindo as URLs do Whatsapp e Instagram
const url_instagram = "https://www.instagram.com/miriancakes_confeitaria";
const url_whatsapp = "https://w.app/miriancakes";

//Eventos de clique para abrir instagram e whatsapp em novas abas
instagram.addEventListener("click", () => {window.open(url_instagram, '_blank');})
whatsapp.addEventListener("click", () => {window.open(url_whatsapp, '_blank');})
