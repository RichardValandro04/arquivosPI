
// capturando botao de salvar
const btn_salvar = document.querySelector(".btn_salvar");

//aplicando função quando o botao salvar for clicado
btn_salvar.addEventListener("click", () => {alert("Doce Salvo!"); window.history.back();})