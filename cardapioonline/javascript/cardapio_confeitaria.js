
// Capturando botoes de adicionar recheio, doces e o botao de delete
const add_recheio = document.querySelector(".adicionar_recheio")
const add_doce = document.querySelector(".adicionar_doce")
const btn_delete = document.querySelectorAll("#delete")

// Adicionando os links para as telas respectivas de adicionar
add_doce.addEventListener("click", () => {window.location.href = "novo_doce.php"})
add_recheio.addEventListener("click", () => {window.location.href = "novo_recheio.php"})


// Função do botao delete
btn_delete.forEach(function(btn){btn.addEventListener("click", () => {alert("DELETADO COM SUCESSO!")})})