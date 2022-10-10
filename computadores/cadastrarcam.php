<?php
//validação para ter acesso 
session_start();
include_once('banco/conexao.php');
   if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
   {
       unset($_SESSION['login']);
       unset($_SESSION['senha']);
       header('Location: index.php');
   }
?>

<?php

    if(isset($_POST['submit']))
    {

;

        include_once('banco/conexao.php');

        $modelo = $_POST['Modelo'];
        $tombo = $_POST['tombo'];
        $setor = $_POST['setor'];
        $responsavel = $_POST['responsavel'];
        $status = $_POST['status'];
        $observacao = $_POST['observacao'];
        $cadastro= $_POST['data_cadastrato'];
     

        $result = mysqli_query($conexao, "INSERT INTO dti (Modelo,tombo,setor,responsavel,status,observacao,data_cadastrato) 
        VALUES ('$modelo','$tombo','$setor','$responsavel','$status','$observacao','$cadastro')");

        header('Location: cadastradocam.php');
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <!-- CSS only -->
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="estilo/cadastrar.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar CAM</title>
</head>

<body>
<?php
include_once('menu.php');

?>




<!------------>
    <div class="wrapper fadeInDown">
<div id="formContent">
  

    <form action="cadastrarcam.php" method="post">
<h4>Novo Cadastro </h4>

    <input type="text" id="Modelo" class="fadeIn second" name="Modelo" placeholder="Modelo" >
<input type="text" id="tombo" class="fadeIn second" name="tombo" placeholder="Tombo">
<input type="text"  id="setor" class="fadeIn second" name="setor" placeholder="Secretária/Setor ">
<input type="text" ida="responsavel" class="fadeIn second" name="responsavel" placeholder="Responsável">

<input type="radio" id="ok" class="fadeIn second"   name="status" value=" ok " required>
<label for="ok">Ok</label>


<input type="radio" id="manutencao" name="status" class="fadeIn second" value="manutenção" placeholder="Status" required>
<label for="manutenção">Manutenção</label>

<input type="text" id="observacao"  class="fadeIn second" name="observacao" placeholder="Obervação">
<input type="date" id="data_cadastrato" class="fadeIn second" name="data_cadastrato" >

<input type="submit" name="submit" class="fadeIn third"  id="submit" >

    </form>

  </div>


</div>





   










</body>
</html>