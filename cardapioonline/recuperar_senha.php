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

    <!-- Header contendo a div com logo e nome do sistema e flor posicionada no canto superior direito -->
    <header>
        <div class="divlogo">
            <img src="imagens/logo_mirian.png" alt="Logo Mirian" class="logo">
            <h2>Mirian Cakes Confeitaria Artesanal</h2>
        </div>

        <div class="divflor">
            <img src="imagens/tulipas_header.png" alt="tulipas" class="tulipas">

        </div>

    </header>


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

    <!--footer que inclui uma div com a imagem de uma tulipa(flor) e uma div "voltar" que inclui um botão de voltar-->
    <footer>
        <div>
            <img src="imagens/tulipas_footer.png" alt="tulipas" class="tulipasbaixo">
        </div>


        <div class="voltar">
            <div class="icone_voltar">
                <img src="imagens/icone_voltar.png" alt="icone_voltar">
            </div>
        </div>

    </footer>

</body>

</html>