<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Novo Recheio</title>
  <link rel="stylesheet" href="css/novo_recheio.css">
  <link rel="shortcut icon" href="imagens/logo_mirian.png">
  <script src="javascript/funcao_voltar.js" defer></script>
  <script src="javascript/novo_recheio.js" defer></script>
</head>

<body>

  <!--header que inclui o texto central da página-->
  <header>
    <h1>ADICIONAR NOVO RECHEIO</h1>
  </header>

  <!--nav que contém uma div container, que inclui uma div "campos" e um button submit-->
  <nav class="container">
    <!--div que inclui dois campos, um label e um input-->
    <div class="campos">
      <label for="nome_recheio">NOME</label>
      <input type="text" name="nome_recheio" id="nome_recheio">
    </div>

    <button type="submit" class="btn_salvar">SALVAR</button>

  </nav>

  <!--footer que inclui uma div "voltar", que inclui um botão de voltar-->
  <footer>
    <div class="icone_voltar">
      <img src="imagens/icone_voltar.png" alt="icone_voltar">
    </div>

  </footer>

</body>

</html>