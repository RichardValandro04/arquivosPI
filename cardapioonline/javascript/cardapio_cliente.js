const botao_pedido = document.querySelector(".botao_pedido");

botao_pedido.addEventListener("click", () => {window.location.href = "novo_pedido.php"})

// ------------------------------------------------ //

// Capturando os botões de abrir e fechar o modal e o próprio modal
const abrirModal = document.getElementById("div_carrinho");
const modal = document.querySelector("dialog")
const fecharModal = document.getElementById("fechar");

// Função que abre modal
abrirModal.onclick=function(){
    modal.show();
    
}

// Função que fecha modal
fecharModal.onclick=function(){
    modal.close();
    
}
// ------------------------------------------------ //

// Limite de checkboxes que podem ser marcados
const limite = 3;

// Capturando todos os checkboxes
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Adicionando evento de escuta para cada checkbox
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', function() {
    // Contando quantos checkboxes estão marcados
    const marcadas = document.querySelectorAll('input[type="checkbox"]:checked');
    // Se o número de checkboxes marcados for maior que o limite, desmarca o último checkbox marcado e emite alerta
    if (marcadas.length > limite) {
      this.checked = false;
      alert("Você pode escolher no máximo 3 recheios")
    }
  });
});

// ------------------------------------------------ //


// Capturando todos icones de carrinho
var carrinhos = document.querySelectorAll(".carrinho_buy");

carrinhos.forEach(function(carrinho) {
    carrinho.addEventListener("click", function(){
        alert("Produto adicionado ao carrinho com sucesso!")
    });    
});    