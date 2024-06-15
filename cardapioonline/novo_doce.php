<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Novo Doce</title>
  <link rel="stylesheet" href="css/novo_doce.css">
  <link rel="shortcut icon" href="imagens/logo_mirian.png">
  <script src="javascript/funcao_voltar.js" defer></script>
  <script src="javascript/novo_doce.js" defer></script>
</head>

<body>

  <!-- header que inclui h1 com identificação da tela -->
  <header>
    <h1>ADICIONAR NOVO DOCE</h1>
  </header>

  <!-- container agrupa as divs que contem os campos e label -->
  <nav class="container">

    <div class="campo_nome">
      <label for="nome_recheio" class="label_campos">NOME</label>
      <input type="text" name="nome_recheio" id="nome_recheio" class="campos">
    </div>

    <div class="campo_desc">
      <label for="desc_doce" class="label_campos">DESCRIÇÃO</label>
      <input type="text" name="desc_doce" id="desc_doce" class="campos">
    </div>

    <div class="campo_valor">
      <label for="valor_doce" class="label_campos">VALOR DEZENA</label>
      <input type="text" name="valor_doce" id="valor_doce" class="campos">
      <!-- ATENCAO, MUDAR TYPE PARA RECEBER VALOR EM REAL-->
    </div>

    <div class="campo_foto">
      <label for="foto_doce" class="label_campos">FOTO</label>
      <input type="file" name="foto_doce" id="foto_doce" class="campos">
    </div>

    <!-- botao de enviar o formulario -->
    <button type="submit" class="btn_salvar">SALVAR</button>

  </nav>


  <?php
    include 'footer_3.php';
  ?>

</body>

</html>