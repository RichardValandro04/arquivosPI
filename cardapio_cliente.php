<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    

    
    <link rel="stylesheet" href="css/cardapio_clientes.css">
    
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <!-- Compiled and minified JavaScript -->
    
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/cardapio_cliente.js" defer></script>
</head>

<?php
session_start();
$nome_usuario = $_SESSION['nome'];

$primeiro_nome = explode(' ', trim($nome_usuario))[0];
require_once 'controllers/controllerLogin.php';
require_once 'controllers/controllerCardapioCliente.php';
?>

<body>

    <!--header que inclui uma saudação, juntamente com a logo da empresa, um texto de informação, um botão de carrinho e um botão de voltar-->
    <header>
        <div class="saudacao_usuario">
            <img src="imagens/icone_perfil.png" alt="Conta" class="icone_perfil">
            <p>Olá,  <?php echo htmlspecialchars($primeiro_nome); ?>!</p>
        </div>

        <div class="informacao_tela">
            <h1>CARDÁPIO</h1>
        </div>

        <div class="div_carrinho" id="div_carrinho">
            <img src="imagens/icone_carrinho.png" class="icone_carrinho">
            <p>Carrinho</p>
        </div>

        <div class="voltar">
            <div class="icone_voltar">
                <img src="imagens/icone_voltar_rosa.png" alt="icone-voltar">
            </div>
        </div>

        <dialog class="dialog_carrinho" id="dialog_carrinho">
            <div>
                <span class="fechar" id="fechar"><img src="imagens/seta_modal_fechar.png" alt=""></span>
            </div>
            <div class="carrinho_info">
                <p>CARRINHO</p>
            </div>
            <div id="conteudo_carrinho" class = "testeCarrinho">

            </div>

            <footer class = "footerCarrinho">
                <h4>Valor Total: </h4>
                <p id = "valorTotal"></p>
            </footer>

            
        </dialog>
    </header>


    <!--section que inclui 3 articles, doces, recheios e bolos-->
    <section>

        <dialog class="popup_adicionar" id="popup_adicionar">
            <p>Pedido adicionado ao carrinho</p>
        </dialog>
        <!--article que inclui uma legend, uma table que inclui os doces, seus ingredientes -->
        <article class="article_doces">
            <legend class="titulo_table">DOCES</legend>
            <div class="tbldoce">
                <table class="table_doces">
                    <?php
                        $controllerCardapioCliente = new ControllerCardapioCliente();
                        $doces = $controllerCardapioCliente->listarDoces();
                        $numDoce = count($doces);
                        if($numDoce < 1){
                            ?>
                        <td class="td_info_doces">
                            <div>
                                <h3>NENHUM DOCE CADASTRADO</h3>
                            </div>
                        </td>
                        <?php
                        }else{
                            foreach ($doces as $linha) {
                            ?>                    
                                <tr>
                                    <td><img src="<?php echo htmlspecialchars($linha['link_foto']);?>" class="imagens_doces" alt=""></td>
                                    <td class="td_info_doces">
                                        <div>
                                            <p class="nome_doce"><?php echo htmlspecialchars($linha['nome_sabor']);?></p>
                                            <p class = "ingredientes_doce"><?php echo htmlspecialchars($linha['descricao']);?></p>
                                        </div>
                                    </td>
                                    <td class="td_info_valores">
                                        <div>
                                            <p class="valor_doce">R$ <?php echo htmlspecialchars($linha['valor_dezena']);?></p>
                                            <p class="quantidade_doce">10 un.</p>
                                        </div>
                                    </td>

                                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" data-product-id=<?php echo htmlspecialchars($linha['pk_id_doce']);?> alt=""></td>
                                </tr>
                    <?php
                            }
                        }
                        ?>

                </table>
            </div>
        </article>

        <!--article que inclui uma legend, uma table que inclui diversos checkbox acerca dos recheios escolhidos -->
        <article class="article_recheios">
            <div class = "conjuntoRecheios">
                <legend class="titulo_table">RECHEIOS</legend>
                <div class="tblRecheios">
                    <table class="table_recheios">
                        <?php

                        $recheios = $controllerCardapioCliente->listarRecheios();
                        $num = count($recheios);

                        if($num < 1){
                            ?>
                            <div class="recheio">
                                <h3>NENHUM RECHEIO CADASTRADO</h3>
                            </div>
                            
                        <?php   
                        }else{
                            foreach ($recheios as $linha) {
                                ?>
                                <tr class="recheio">
                                    <td><input type="checkbox" name="recheio" class="checkbox_config" data-id=<?php echo htmlspecialchars($linha['pk_id_recheio']); ?> value = "<?php echo htmlspecialchars($linha['nome_recheio']); ?>"> <?php echo htmlspecialchars($linha['nome_recheio']); ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>

            <article class = "article_bolos">
                <legend class="titulo_table">BOLOS</legend>
                <div class="tblBolos">
                    <table class="table_bolos">
                        <?php

                        $bolos = $controllerCardapioCliente->listarBolos();
                        $num = count($bolos);

                        if($num < 1){
                            ?>
                            <div class="bolo">
                                <h3>NENHUM BOLO CADASTRADO</h3>
                            </div>
                            
                        <?php   
                        }else{
                            foreach ($bolos as $linha) {
                                ?>
                                <tr>
                                    <td>
                                        <div>
                                            <p class="quantidade_fatias"><?php echo htmlspecialchars($linha['quantidade_fatias']); ?> Fatias</p>
                                            <p class="barra"></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p class="valor_bolo">R$ <?php echo htmlspecialchars($linha['valor']); ?></p>
                                            <p class="barra"></p>
                                        </div>
                                    </td>

                                    <td><img src="imagens/icone_carrinho_buy.png" class="carrinho_buy" alt=""></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
    
        </article>

    </section>

    <!--footer que inclui um botão do tipo submit-->
    <footer>
        <button type="submit" class="botao_pedido"> REALIZAR PEDIDO</button>
    </footer>

</body>

</html>