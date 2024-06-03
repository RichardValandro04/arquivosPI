const aceitos = document.querySelectorAll(".btn_aceitar");
const recusados = document.querySelectorAll(".btn_recusar");


aceitos.forEach(function(aceito) {
    aceito.addEventListener("click", function(){
        alert("Pedido Aceito!")
    });    
}); 

recusados.forEach(function(recusado) {
    recusado.addEventListener("click", function(){
        alert("Pedido Recusado!")
    });    
}); 