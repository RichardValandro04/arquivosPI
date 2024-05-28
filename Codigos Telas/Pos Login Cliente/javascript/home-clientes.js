
// Capturando os botões de redes sociais e de sair do sistema
const instagram = document.querySelector(".logo-instagram")
const whatsapp = document.querySelector(".logo-whatsapp")
const botao_sair = document.querySelector(".botao-sair")

// Definindo as URLs do Whatsapp e Instagram
const url_instagram = "https://www.instagram.com/miriancakes_confeitaria";
const url_whatsapp = "https://w.app/miriancakes"

//Eventos de clique para abrir instagram e whatsapp em novas abas
instagram.addEventListener("click", () => {window.open(url_instagram, '_blank');})
whatsapp.addEventListener("click", () => {window.open(url_whatsapp, '_blank');})

//Evento de clique para abrir index.html na mesma aba
botao_sair.addEventListener("click", () => {window.location.href = "https://www.funcionou.com.br"})

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