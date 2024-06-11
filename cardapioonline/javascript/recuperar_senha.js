//capturando botão de enviar email
const botao_enviar = document.querySelector(".botao_enviar")

//adicionando evento de click para ir para a janela de alteração de senha
// obs.: o link para esta tela deverá ser enviado para o email do usuário
botao_enviar.addEventListener("click", () => {window.location.href = "nova_senha.php"})