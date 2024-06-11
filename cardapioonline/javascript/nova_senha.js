//capturando botao de alterar senha
const botao_alterar = document.querySelector(".botao_alterar");

//adicionando evento de click para exibir um alert de senha alterada
// obs.: a lógica para validação de senha ainda deverá ser aplicada
botao_alterar.addEventListener("click", () => { alert("Senha Alterada"); window.location.href = "index.php"});