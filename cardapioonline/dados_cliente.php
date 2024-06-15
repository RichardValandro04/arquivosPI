<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Dados</title>
    <link rel="stylesheet" href="css/dados_cliente.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/funcao_voltar.js" defer></script>
    
</head>

<body>

    <?php

    include 'header_3.php';

    ?>

    

    <div class="identificador_pagina">
        <img src="imagens/icone_pessoa.png" alt="" id="icone_pessoa">
        <h1>MEUS DADOS</h1>
    </div>

    <!--SECTION-->
    <article>


        <section class="dados">
            <!--NOME-->
            <div class="campo_nome">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" value="Marta Talitha Mendes" disabled>
            </div>


            <!--EMAIL-->
            <div class="linha_email">

                <div class="campo_email">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="martamendes@gmail.com" disabled>
                </div>

                <div class="icone_editar">
                    <img src="imagens/icone_editar.png" alt="icone_editar">
                </div>
            </div>

            <!--DIV CPF E TELEFONE-->
            <div class="linha_cpf_telefone">
                <!--CPF-->
                <div class="campo_cpf">
                    <label for="cpf">CPF</label>
                    <input type="text" name="CPF" value="000.000.000-00" disabled>
                </div>

                <div class="campo_telefone">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" value="(27) 9 1234-5678" disabled>
                </div>

                <div class="icone_editar">
                    <img src="imagens/icone_editar.png" alt="icone_editar">
                </div>
            </div>


            <!--SENHA-->
            <div class="linha_senha">
                <div class="campo_senha">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" value="abc123" disabled>
                </div>

                <div class="icone_editar">
                    <img src="imagens/icone_editar.png" alt="icone_editar">
                </div>
            </div>
        </section>
    </article>



    <?php
    include 'footer_3.php';
    ?>
</body>

</html>