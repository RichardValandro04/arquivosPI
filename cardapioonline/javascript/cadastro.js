//Capturando o botão de registro na tela de cadastro
const botao_registro = document.querySelector(".botao_registro");

//Deverá ser implementada na função do evento abaixo a lógica de validação de cadastro

//Adicionando evento de click para abrir um alert informando que o cadastro foi realizado
botao_registro.addEventListener("click", () => {alert("Cadastro Realizado"); window.location.href = "home_cliente.php"});