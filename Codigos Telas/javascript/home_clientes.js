
//Capturando os 3 itens de menu
const meus_dados = document.querySelector(".meus_dados");
const meus_pedidos = document.querySelector(".meus_pedidos");
const cardapio = document.querySelector(".cardapio");

//Adicionando eventos de click
meus_dados.addEventListener("click", () => {window.location.href = "/dados_cliente.html"} );
meus_pedidos.addEventListener("click", () => {alert("Meus Pedidos em Produção")} );
cardapio.addEventListener("click", () => {alert("Cardápio em Produção")});


// Capturando os botões de redes sociais 
const instagram = document.querySelector(".logo_instagram")
const whatsapp = document.querySelector(".logo_whatsapp")

// Definindo as URLs do Whatsapp e Instagram
const url_instagram = "https://www.instagram.com/miriancakes_confeitaria";
const url_whatsapp = "https://w.app/miriancakes"

//Eventos de clique para abrir instagram e whatsapp em novas abas
instagram.addEventListener("click", () => {window.open(url_instagram, '_blank');})
whatsapp.addEventListener("click", () => {window.open(url_whatsapp, '_blank');})


// Impedir abertura do menu quando clicar com botão direito
document.addEventListener('contextmenu', (e) => {
    e.preventDefault();
}, false);

// Impedir eventos de arrastar
document.addEventListener('dragstart', (e) => {
    e.preventDefault();
}, false);

// Impedir eventos de copiar e cortar
document.addEventListener('copy', (e) => {
    e.preventDefault();
}, false);

// Impedir que o usuário "corte um objeto da tela"
document.addEventListener('cut', (e) => {
    e.preventDefault();
}, false);

// Impedir que o usuário possa selecionar algo da tela (textos, por exemplo)
document.addEventListener('selectstart', (e) => {
    e.preventDefault();
});