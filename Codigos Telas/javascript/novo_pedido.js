// Verifica se algum dos botões de rádio está selecionado
var btn_entrega = document.querySelector(".rd_entrega");
var btn_retirada = document.querySelector(".rd_retirada");
var divLista = document.querySelector(".seleçao_endereço");
divLista.style.display = "none";

btn_entrega.addEventListener("change", mostrarLista);
btn_retirada.addEventListener("change", mostrarLista);

function mostrarLista() {
    if (btn_entrega.checked) {
        // Se algum botão de rádio estiver selecionado, exibe a dropdown
        divLista.style.display = "flex";

    }else if (btn_retirada.checked) {
        // Caso contrário, esconde a dropdown
        divLista.style.display = "none";
    }
}


const ir_para_pagamento = document.querySelector(".ir_para_pagamento")

ir_para_pagamento.addEventListener("click", () => {alert("Pagamento Realizado!"); window.location.href = "/home_cliente.html"});
