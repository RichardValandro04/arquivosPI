<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="css/recuperar_senha.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/recuperar_senha.js" defer></script>

</head>

<body>

    <?php

    include 'header_2.php';

    ?>


    <!--nav que inclui uma tag "p", uma div "email" e um botão "enviar"-->
    <nav class="container">
        <p class="texto_central">Confirme o email cadastrado para que <span>possamos enviar o link de alteração de
                senha</span></p>

        <!--div que inclui dois campos, um label "email" e um input-->
        <div class="email">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email">
        </div>

        <!--botão de confirmação de email para envio do link de alteração de senha-->
        <button type="submit" class="botao_enviar">ENVIAR</button>
    </nav>

    <?php
    include 'footer_1.php';
    ?>

</body>

</html>