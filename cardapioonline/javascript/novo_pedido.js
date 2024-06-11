// Captura os botoes de radio
var btn_entrega = document.querySelector(".rd_entrega");
var btn_retirada = document.querySelector(".rd_retirada");

// captura a dropdown list e define seu display como none
var divLista = document.querySelector(".seleçao_endereço");
divLista.style.display = "none";

//adiciona um evento de escuta aos radios para acionar a função quando forem clicados
btn_entrega.addEventListener("change", mostrarLista);
btn_retirada.addEventListener("change", mostrarLista);

function mostrarLista() {
    if (btn_entrega.checked) {
        // Se o botão de rádio de entrega estiver selecionado, exibe a dropdown
        divLista.style.display = "flex";

    }else if (btn_retirada.checked) {
        // Caso contrário, esconde a dropdown
        divLista.style.display = "none";
    }
}

// Captura botao de ir para pagamento
const ir_para_pagamento = document.querySelector(".ir_para_pagamento")

// Adiciona função de clique para executar função no botao de ir para pagamento
ir_para_pagamento.addEventListener("click", () => {alert("Pagamento Realizado!"); window.location.href = "home_cliente.php"});
