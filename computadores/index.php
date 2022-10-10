<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="estilo/login.css">

<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>


       
        
   <div class="wrapper fadeInDown">
<div id="formContent">
  
<div class="fadeIn first">
      <img src="img/logo.png" id="icon" alt="User Icon" />
</div>


    <form action="validacaologin.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Digite seu usuário">
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Digite sua senha">
      <input type="submit" name="submit" class="fadeIn fourth" value="Enviar">
    </form>

  </div>
</div>

</div>
</html>