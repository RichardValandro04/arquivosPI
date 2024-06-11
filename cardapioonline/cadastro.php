<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="imagens/logo_mirian.png">
    <script src="javascript/funcao_voltar.js" defer></script>
    <script src="javascript/cadastro.js" defer></script>
</head>

<body>
    <!-- Header contendo a div com logo e nome do sistema e flor posicionada no canto superior direito -->
    <header>
        <div class="divlogo">
            <img src="imagens/logo_mirian.png" alt="Logo Mirian" class="logo">
            <p>Mirian Cakes Confeitaria Artesanal</p>
        </div>

        <div class="divflor">
            <img src="imagens/tulipas_header.png" alt="tulipas" class="tulipas">

        </div>

    </header>

    <!-- Article contém uma section de dados do usuario, essa section contém o formulário de dados -->
    <article>
        <section class="section_dados_usuario">
            <!-- O formulario de dados é dividido em 2 div's, uma de dados pessoais e outra de endereço -->
            <form class="formulario_dados">

                <!-- div dados pessoais, agrupa todos os campos de dados pessoais -->
                <div class="dados_pessoais">
                    <legend>DADOS PESSOAIS</legend>
                    <div class="campo_nome">
                        <label for="nome_completo"> Nome Completo</label>
                        <input type="text" name="nome_completo" id="nome_completo">
                    </div>

                    <div class="campo_email">
                        <label for="email"> Email </label>
                        <input type="email" name="email" id="email">
                    </div>

                    <div class="campo_cpf">
                        <label for="cpf"> CPF </label>
                        <input type="text" name="cpf" id="cpf">
                    </div>

                    <div class="campo_telefone">
                        <label for="telefone"> Telefone</label>
                        <input type="tel" name="telefone" id="telefone">
                    </div>

                    <div class="linha_senha">
                        <div class="campo_senha">
                            <label for="senha"> Senha</label>
                            <input type="password" name="senha" id="senha">
                        </div>

                        <div class="campo_conf_senha">
                            <label for="conf_senha"> Confirmar Senha</label>
                            <input type="password" name="conf_senha" id="conf_senha">
                        </div>
                    </div>
                </div>

                <!-- div endereço, agrupa todos os campos de endereço -->
                <div class="endereco">
                    <legend>ENDEREÇO</legend>
                    <div class="campo_cep">
                        <label for="cep"> CEP</label>
                        <input type="text" name="cep" id="cep">
                    </div>

                    <div class="linha_rua_num">
                        <div class="campo_rua">
                            <label for="rua"> Rua </label>
                            <input type="text" name="rua" id="rua" disabled>
                        </div>

                        <div class="campo_num">
                            <label for="numero"> N° </label>
                            <input type="text" name="numero" id="numero">
                        </div>

                    </div>

                    <div class="campo_bairro">
                        <label for="bairro"> Bairro </label>
                        <input type="text" name="bairro" id="bairro" disabled>
                    </div>

                    <div class="linha_cidade_uf">

                        <div class="campo_cidade">
                            <label for="cidade"> Cidade </label>
                            <input type="text" name="cidade" id="cidade" disabled>
                        </div>

                        <div class="campo_uf">
                            <label for="uf"> UF </label>
                            <input type="text" name="uf" id="uf" disabled>
                        </div>

                    </div>

                    <div class="campo_complemento">
                        <label for="complemento"> Complemento </label>
                        <input type="text" name="complemento" id="complemento">
                    </div>

                </div>
            </form>

            <!-- Botao do tipo submit para envio do formulario ao banco de dados -->
            <div class="botao">
                <button type="submit" class="botao_registro">REGISTRAR-SE</button>
            </div>
        </section>
    </article>

    <!-- footer inclui uma div com uma flor tulipa alinhada ao canto inferior esquerdo e uma div com o botão de voltar -->
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