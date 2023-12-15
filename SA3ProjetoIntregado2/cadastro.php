<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <title>Sua Página</title>
</head>

<body>
    <nav id="bar1">
        <div id="itensBar1">
            <a href="index.html"><img id="logoBar" src="img/logo.png" alt="logo" /></a>

        </div>
    </nav>
 <a href="login.php">
 <button type="button" class="btn btn-primary"
        style=" --bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-top: 3%; ">
  LOGAR
</button>
    </a>

    <form class="needs-validation1" novalidate action="cadastroProcessa.php" method="post" onsubmit="enviar()">
        <h1 class="mb-4">Registre-se Aqui!</h1>
        <div class="cadastrar">
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <label for="pNome">Primeiro nome</label>
                <input type="text" class="form-control" id="pNome" name="pNome" placeholder="Nome" pattern="[A-Za-z]+" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="sNome">Sobrenome</label>
                <input type="text" class="form-control" id="sNome" name="sNome" placeholder="Sobrenome" pattern="[A-Za-z]+" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="usuario">Usuário</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="arroba">@</span>
                    </div>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" aria-describedby="inputGroupPrepend3" pattern="[A-Za-z]+" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, Preencha o campo.
                    </div>
                </div>
            </div>
        </div>
        <!-- ... Outros campos ... -->
        <div class="row mb-4">
            <div class="col-md-5 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-7 mb-3">
                <label for="cEmail">Confirmar E-mail</label>
                <input type="email" class="form-control" id="cEmail" placeholder="E-mail" onblur="Email()" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
        </div>
        <!-- ... Restante dos campos ... -->
        <div class="row mb-4">
            <div class="col-md-5 mb-3">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-7 mb-3">
                <label for="cSenha">Confirmar Senha</label>
                <input type="password" class="form-control" id="cSenha" placeholder="Senha" onblur="Senha()" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-5 mb-3">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" pattern="[A-Za-z]+" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Sigla" pattern="[A-Z]{2}" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP (numeros)" pattern="[0-9]{8}" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF(numeros)" pattern="[0-9]{11}" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="nCartao">Nº Cartão</label>
                <input type="text" class="form-control" id="nCartao" name="nCartao" placeholder="Nº Cartão (numeros)" pattern="[0-9]{13,16}" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, Preencha o campo.
                </div>
            </div>
        </div>
    
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="termos" onclick="marcarTermos()" required>
                <label class="form-check-label" for="invalidCheck3">
                    Concordo com os termos e condições
                </label>
            </div>
        </div>
        <br>
        <button id="btnCadastro" class="btn btn-primary" type="submit">Cadastre-se</button>
        </div>
    </form>

</body>
<footer>
    <div class="img"><img src="img/logo.png" id="imgF" alt="Logo" /></div>
    <br /><br /><br />
    <div class="global">
        <h3>Siga Animart nas redes sociais</h3>
        <br />
        <h3>E fique por dentro das nossas novidades e promoções.</h3>
        <br />
        <div class="socials-container" id="midias">
            <a href="#" class="social twitter">
                <svg height="1em" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                </svg></a>
            <a href="#" class="social facebook"><svg height="1em" viewBox="0 0 320 512">
                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                    </path>
                </svg></a>
            <a href="#" class="social google-plus">
                <svg height="1em" viewBox="0 0 640 512">
                    <path d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z">
                    </path>
                </svg></a>
            <a href="#" class="social instagram"><svg height="1em" viewBox="0 0 448 512">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                    </path>
                </svg></a>
            </div>
        </div>
    </div class="container">
    <div class="Pagamentos">
        <img src="imagens/Logos/elo-logo.png" alt="Elo" />
        <img src="imagens/Logos/hypercard-logo.png" alt="Hipercard" />
        <img src="imagens/Logos/mastercard-logo.png" alt="MasterCard" />
        <img src="imagens/Logos/barcode-icon.png" alt="Pix" />
        <img src="imagens/Logos/visa-logo.png" alt="Visa" />
    </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="cadastro.js"></script>


<script>
    <?php if (!empty($_GET['msgErro'])) { ?>
        alert("<?php echo $_GET['msgErro']; ?>");
    <?php } ?>
    <?php if (!empty($_GET['msgSucesso'])) { ?>
        alert("<?php echo $_GET['msgSucesso']; ?>");
    <?php } ?>
</script>


</html>