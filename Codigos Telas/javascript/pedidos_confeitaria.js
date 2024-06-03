//Capturando botoes de recusar e aceitar
const aceitos = document.querySelectorAll(".btn_aceitar");
const recusados = document.querySelectorAll(".btn_recusar");


//Quando for clicado o de aceitar executa o bloco abaixo
aceitos.forEach(function(aceito) {
    aceito.addEventListener("click", function(){
        alert("Pedido Aceito!")
    });    
}); 


//Quando for clicado o de recusar executa o bloco abaixo
recusados.forEach(function(recusado) {
    recusado.addEventListener("click", function(){
        alert("Pedido Recusado!")
    });    
}); 