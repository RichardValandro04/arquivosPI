<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha</title>
    <link rel="stylesheet" href="css/nova_senha.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/nova_senha.js" defer></script>
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

    <!--nav "container" que inclui uma div "nova-senha", a div "confirmar-senha" e o botão de confirmação de alteração de senha-->
    <nav class="container">
        <!--div que inclui um label, um input e uma tag "p"-->
        <div class="nova_senha">
            <label for="novasenha">Nova Senha</label>
            <input type="text" id="novasenha" name="novasenha">
            <p>Sua nova senha deve conter no mínimo 8 caracteres</p>
        </div>

        <!--div que inclui um label e um input-->
        <div class="confirmar_senha">
            <label for="confsenha">Confirmar Nova Senha</label>
            <input type="text" id="confsenha" name="confsenha">
        </div>
        <!--botao que realiza a alteração de senha-->
        <button type="submit" class="botao_alterar">ALTERAR</button>
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