
/*ERROS: 
 * APÓS PREENCHIDO O ENDEREÇO, EU CONSIGO MUDAR O VALOR DE CEP
 * AO DIGITAR LETRAS, O CODIGO FICA ESTÁTICO
 * PRECISA DE UM TRATAMENTO DE ERROS MELHOR E COMENTAR O QUE JA ESTA FEITO
*/


const campo_cep = document.querySelector("#cep");


campo_cep.addEventListener("blur", () => {
    var num_cep = campo_cep.value;
    var url = `https://viacep.com.br/ws/${num_cep}/json/`;
    fetch(url).then(resultado => {
        return resultado.json();
    }).then(dados => {
        if (dados.erro) {
            alert("O CEP DIGITADO ESTÁ INVÁLIDO");
            return;
        }
        preencherCampos(dados);
    })
})

function preencherCampos(dados) {
    var rua = document.querySelector("#rua");
    var bairro = document.querySelector("#bairro");
    var cidade = document.querySelector("#cidade");
    var uf = document.querySelector("#uf");

    rua.value = dados.logradouro;
    bairro.value = dados.bairro;
    cidade.value = dados.localidade;
    uf.value = dados.uf;
}


//Capturando o botão de registro na tela de cadastro
const botao_registro = document.querySelector(".botao_registro");

//Deverá ser implementada na função do evento abaixo a lógica de validação de cadastro

//Adicionando evento de click para abrir um alert informando que o cadastro foi realizado
botao_registro.addEventListener("click", () => { alert("ALo"); window.location.href = "home_cliente.php" });


