<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="estilo/login.css">
  <link rel="shortcut icon" href="img/foto2.jpg" type="image/x-icon">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Chamado </title>
</head>

<body>
<i class="bi bi-person-circle"></i>
<div class=" animacao">
    <div class="login-box">
      
      <h2>Sistema de Chamado</h2>
      <div class="img-logo">
        <img src="img/foto2.jpg" width="90px" alt="">
      </div>

      <div class="card">
     
        <form action="validacaologin.php" method="post">
        <div class="people">
        <img src="img/people.svg " width="40x" alt="logo ">
      </div>
          <div class="user-box">
            <input type="text" id="login" class="campo login" name="login" placeholder="Usuário ">
            <label for="login">User </label>
          </div>

          <div class="user-box">
            <input type="password" id="password" name="senha" placeholder="Digite sua senha">
            <label>Password</label>
          </div>

          <div class="custom-btn btn-3">
            <span> 
              <input type="submit" name="submit" class="botao" value="Entrar">
              </span>
          </div>
      </div>

      </form>
  
  </div>
</div>

</html>