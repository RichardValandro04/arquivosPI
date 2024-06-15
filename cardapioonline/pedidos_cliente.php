<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pedidos_cliente.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/pedidos_cliente.js" defer></script>
    <script src="javascript/funcao_voltar.js" defer></script>

    <title>Meus Pedidos</title>
</head>

<body>

    <?php

    include 'header_3.php';

    ?>

    <div class="identificador_pagina">
        <img src="imagens/icone_pedidos.png" alt="" id="icone_pessoa">
        <h1>MEUS PEDIDOS</h1>
    </div>

    <article>
        <section>
            <table>
                <div class="legendas_tabela">
                    <legend>Aguardando Confirmação</legend>
                    <p>|</p>
                    <legend>Em Andamento</legend>
                    <p>|</p>
                    <legend>Concluídos</legend>
                    <p>|</p>
                    <legend>Cancelados</legend>
                </div>

                <div class="titulos">
                    <p>Pedido</p>
                    <p>Data do Pedido</p>
                    <p>Valor Total</p>
                </div>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0003</td>
                    <td class="date">22/03/2024</td>
                    <td class="valor">R$ 19,90</td>
                </tr>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0002</td>
                    <td class="date">15/02/2024</td>
                    <td class="valor">R$ 29,90</td>
                </tr>

                <tr class="linha_tabela">
                    <td class="num_pedido">#0001</td>
                    <td class="date">21/12/2024</td>
                    <td class="valor">R$ 134,00</td>
                </tr>
            </table>
        </section>
    </article>



    <?php

    include 'footer_2.php';

    ?>
    
</body>

</html>