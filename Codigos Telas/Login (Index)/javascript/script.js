//Capturando a div que agrupam as imagens e as imagens do carrossel
const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

//Definindo um contador de imagens
let idx = 0;


/* A função avança o contador para percorrer o array de imagens retornado pelo querySelectorAll
 * Quando chegar ao final do array, o contador é reiniciado, começando pela primeira imagem novamente
 * o style.transform é o estilo que realiza a mudança de uma imagem para outra
 */
function carrossel(){
    idx++;

    if(idx > img.length - 1){
        idx=0;
    }

    imgs.style.transform = `translateX(${-idx * 50}rem)`;

}

// Define o intervalo de troca das imagens
setInterval(carrossel, 1800);