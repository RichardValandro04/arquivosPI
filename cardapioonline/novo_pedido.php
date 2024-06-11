<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/novo_pedido.css">
    <link rel="shortcut icon" type="imagex/png" href="imagens/logo_mirian.png">
    <script src="javascript/novo_pedido.js" defer></script>
    <script src="javascript/funcao_voltar.js" defer></script>
    <title>Novo Pedido</title>
</head>


<body>
    <!--HEADER-->
    <header>
        <!-- Nome e Logo do sistema -->
        <div class="divlogo">
            <img src="imagens/logo_mirian.png" alt="Logo Mirian" class="logo">
            <p>Mirian Cakes <span>Confeitaria Artesanal</span></p>

        </div>

        <!-- Saudação ao usuário logado -->
        <div class="saudacao_usuario">
            <img src="imagens/icone_perfil.png" alt="Conta" class="icone_perfil">
            <p>Olá, Marta!</p>

        </div>
    </header>

    <!--ARTICLE CONTENDO 4 SECTIONS-->
    <article>
        <!--SECTION CONTENDO TABELA-->
        <section>
            <!--TABELA ESPECIFICANDO O PEDIDO-->
            <div>
                <table>
                    <tr class="titulos">
                        <th>Quantidade</th>
                        <th>Item</th>
                        <th>Recheio</th>
                        <th>Valor</th>
                    </tr>
                    <tr>
                        <td class="coluna_esquerda">1x</td>
                        <td>Bolo</td>
                        <td>Ninho com Nutella</td>
                        <td class="coluna_direita">R$ 50,00</td>
                    </tr>
                    <tr>
                        <td class="coluna_esquerda">20x</td>
                        <td>Doce</td>
                        <td>Brigadeiro</td>
                        <td class="coluna_direita">R$ 60,00</td>
                    </tr>
                    <tr>
                        <td class="coluna_esquerda">10x</td>
                        <td>Doce</td>
                        <td>Beijinho</td>
                        <td class="coluna_direita">R$ 30,00</td>
                    </tr>

                    <tr>
                        <td class="fundo_ultima_linha"> </td>
                        <td class="fundo_ultima_linha"> </td>
                        <td class="fundo_ultima_linha"> </td>
                        <td class="end" id="valor_total">Valor Total: R$ 140,00</td>
                    </tr>
                </table>
            </div>
        </section>

        <!--SECTION CONTENDO INPUTS DE DATA E HORA - MODO DE RECEBIMENTO - OPÇÕES DE ENDEREÇO-->
        <section>
            <!--DIV CONTÉM DATA E HORA ENTREGA - MODO DE RECEBIMENTO - OPÇÕES DE ENDEREÇO-->
            <div class="modo_data_hora_seleçao">
                <!--DATA E HORA DE ENTREGA-->
                <div>
                    <form class="data_hora_entrega" action="">
                        <div>
                            <div>
                                <label for="data_entrega">Data de Entrega</label>
                            </div>
                            <div class="icon_input_data_hora">
                                <img class="tam_calen_relo" id="fundo_calen_relog" src="imagens/icone_calendario.png"
                                    alt="">
                                <input type="date" name="" id="data_entrega">
                            </div>
                        </div>

                        <div>
                            <div>
                                <label for="hora_entrega">Hora da Entrega</label>
                            </div>
                            <div class="icon_input_data_hora">
                                <img class="tam_calen_relo" id="fundo_calen_relog" src="imagens/relogio.png" alt="">
                                <input type="time" name="" id="hora_entrega">
                            </div>
                        </div>
                    </form>
                </div>
                <!--DIV COM MODO DE RECEBIMENTO E OPÇÕES DE ENDEREÇO-->
                <div>
                    <!--MODO DE DE RECEBIMENTO (ENTREGA OU RETIRADA)-->
                    <form class="entrega_retirada" action="">
                        <div class="entrega">
                            <input type="radio" name="receba" class="rd_entrega">
                            <label id="label_entrega_retirada" for="entrega">Entrega</label>
                        </div>
                        <div class="retirada">
                            <input type="radio" name="receba" class="rd_retirada">
                            <label id="label_entrega_retirada" for="retirada">Retirada</label>
                        </div>
                    </form>

                    <!--SE FOR ENTREGA - OPÇÕES DE ENDEREÇO-->
                    <form action="">
                        <div class="seleçao_endereço">
                            <div>
                                <p>Selecione o endereço para entrega</p>
                            </div>
                            <div>
                                <label for="endereços"></label>
                                <select name="endereços" id="lista">
                                    <option value="01">Novo Endereço</option>
                                    <option value="02">Endereço 01</option>
                                    <option value="03">Endereço 02</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <form class="form_endereço" action="">
                <fieldset class="fieldset_endereço">
                    <legend>Endereço</legend>
                    <!-- DIV CEP - RUA - Nº -->
                    <div class="cep_rua_n">
                        <!--CEP -->
                        <div class="cep">
                            <label for="cep">Cep</label>
                            <input type="text" name="cep" class="campo_cep">
                        </div>
                        <!--RUA-->
                        <div class="rua">
                            <label for="rua">Rua</label>
                            <input type="text" name="rua" class="campo_rua" disabled>
                        </div>
                        <!--NÚMERO-->
                        <div class="num">
                            <label for="n">N°</label>
                            <input type="text" name="n" class="campo_n">
                        </div>
                    </div>
                    <!--DIV BAIRRO - CIDADE - COMPLEMENTO -->
                    <div class="bairro_cidade_complemento">
                        <div class="bairro">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" class="campo_bairro" disabled>
                        </div>
                        <div class="cidade">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" class="campo_cidade" disabled>
                        </div>
                        <div class="complemento">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="campo_complemento">
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
        <!--IR PARA PAGAMENTO-->
        <section>
            <div class="ir_para_pagamento">
                <h4>Ir para pagamento</h4>
                <img src="imagens/icone_pix.png" alt="" id="icone_pix">
            </div>
        </section>
    </article>

    <!--FOOTER-->
    <!-- Footer inclui o botão de voltar -->
    <footer>
        <div class="voltar">
            <div class="icone_voltar">
                <img src="imagens/icone_voltar.png" alt="icone_voltar">
            </div>
        </div>
    </footer>
</body>

</html>