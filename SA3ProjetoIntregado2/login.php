<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="login.php">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <title>Sua Página</title>
</head>

<body class="body-no-margin">
     
    <div class="login">
        <?php

            session_start();
            // Verificar se $_SESSION['usuario'] está definida
         if (isset($_SESSION['usuario'])) {
           // Mostrar o nome do usuário
          echo '<div class="usuarioLogado">';
          echo 'Bem-vindo, ' . $_SESSION['usuario'];
          echo '</div>';
            echo '<a href="logout.php" class="btn btn-dark" id="logout">Sair</a>';
         } else {
           // Se não estiver logado, mostrar botões de login e cadastro
          echo '<div class="login">';
          echo '<a href="login.php"><button class="entrar_cadastro">';
          echo '<span>Entrar</span>';
          echo '</button></a>';
          echo '<a href="cadastro.php"><button class="entrar_cadastro">';
          echo '<span>Cadastrar</span>';
          echo '</button></a>';
          echo '</div>';
         }
        ?>
    </div>
 
  <form class="needs-validation1" action="loginProcessa.php" method="post" novalidate>
    <h1>LOGIN</h1>
    <div class="form-row mb-4">
      <div class="col-md-10 mb-3">
        <label for="usuario">Usuário</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="arroba">@</span>
          </div>
          <input type="text" class="form-control" name="loginUsuario" id="usuario" placeholder="Usuário"
            aria-describedby="inputGroupPrepend3" pattern="[A-Za-z]+" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
          <div class="invalid-feedback">
            Por favor, Preencha o campo.
          </div>
        </div>
      </div>
      <div class="col-md-10 mb-3">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="loginSenha" id="senha" placeholder="Senha" required>
        <div class="valid-feedback">
          Tudo certo!
        </div>
        <div class="invalid-feedback">
          Por favor, Preencha o campo.
        </div>
      </div>

      <div class="col-md-10 mb-3">

        <select class="form-select" name="tipo" id="tipo">
          <option value="C">Cliente</option>
          <option value="F">Funcionario</option>
        </select>
      </div>
    </div>
    <button id="btnLogin" class="btn btn-primary" type="submit" onclick="Login()"> Entrar </button>
    <br>
    <a class="textologin" href="cadastro.php">Não possui uma conta? Cadastre-se</a>
    </div>
  </form>
</body>

<script src="cadastro.js"></script>
<script src="cep.js"></script>
<script src="mapaLoja.js"></script>

<script>
  <?php if (!empty($_GET['msgErro'])) { ?>
    alert("<?php echo $_GET['msgErro']; ?>");
  <?php } ?>
  <?php if (!empty($_GET['msgSucesso'])) { ?>
    alert("<?php echo $_GET['msgSucesso']; ?>");
  <?php } ?>
</script>


</html>