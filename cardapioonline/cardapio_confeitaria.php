<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cardapio_confeitaria.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/cardapio_confeitaria.js" defer></script>
    <script src="javascript/funcao_voltar.js" defer></script>
    <title>Cardápio</title>
</head>

<!--BODY-->

<body>

    <?php

    include 'header_1.php';

    ?>
    

    <!--ARTICLE - 2 SECTIONS-->
    <article>

        <!-- Section meus-clientes inclui um ícone de pessoas e o texto clientes, identificando a página  -->

        <!-- SECTION CONTENDO CARDÁPIO E ADICIONAR ITENS-->
        <section>
            <div class="identificador_pagina">
                <img src="imagens/icone_cardapio.png" alt="clientes_icon">
                <p>CARDÁPIO</p>
            </div>
            <!-- ADD RECHEIO - ADD DOCE-->
            <div class="flexcoluns">

                <!-- DIV ADD RECHEIO E ADD DOCE-->
                <div class="add-recheio-doce">
                    <!--ADD RECHEIO-->
                    <div class="adicionar_recheio">
                        <img id="icon_add" src="imagens/icone_add.png" alt="">
                        <p>ADICIONAR NOVO<span>RECHEIO</span></p>
                    </div>
                    <!--ADD DOCE-->
                    <div class="adicionar_doce">
                        <img id="icon_add" src="imagens/icone_add.png" alt="">
                        <p>ADICIONAR NOVO<span>DOCE</span></p>
                    </div>
                </div>
                <div>

        </section>

        <!--SECTION CONTENDO DUAS TABELAS (RECHEIOS E DOCES)-->
        <section class="div_tabelas">
            <!--TABELA RECHEIOS-->
            <table>
                <tr>
                    <th> <img id="icon_recheio_doce" src="imagens/massa.png" alt="">Recheios</th>
                </tr>
                <tr>
                    <td>Ninho com Morango <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Ninho com Nutella <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Brigadeiro Cremoso <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Ninho Cremoso <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Brigadeiro Branco <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Óreo <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Ferreiro Rocher <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
            </table>
            <!--TABELA DOCES-->
            <table>
                <tr>
                    <th><img id="icon_recheio_doce" src="imagens/icone_brigadeiro.png" alt="">Doces</th>
                </tr>
                <tr>
                    <td>Brigadeiro <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Beijinho <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Cajuzinho <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Romeu e Julieta <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Brigadeiro Branco <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Brigadeiro de Café<img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
                <tr>
                    <td>Ninho com Nutella <img id="delete" src="imagens/icone_excluir.png" alt=""></td>
                </tr>
            </table>
        </section>
    </article>

    <?php
    include 'footer_3.php';
    ?>

</body>

</html>