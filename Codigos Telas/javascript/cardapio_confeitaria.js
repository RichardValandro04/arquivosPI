const add_recheio = document.querySelector(".adicionar_recheio")
const add_doce = document.querySelector(".adicionar_doce")
const btn_delete = document.querySelectorAll("#delete")

add_doce.addEventListener("click", () => {window.location.href = "/novo_doce.html"})
add_recheio.addEventListener("click", () => {window.location.href = "/novo_recheio.html"})

btn_delete.forEach(function(btn){btn.addEventListener("click", () => {alert("DELETADO COM SUCESSO!")})})