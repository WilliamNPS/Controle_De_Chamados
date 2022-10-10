<?php

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

    

include_once('banco/conexao.php');

if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM dti WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $modelo = $user_data['Modelo'];
            $tombo = $user_data['tombo'];
            $setor = $user_data['setor'];
            $responsavel = $user_data['responsavel'];
            $status = $user_data['status'];
            $observacao = $user_data['observacao'];
            $cadastro= $user_data['data_cadastrato'];
        }
    }
    else
    {
        header('Location: cadastradocam.php');
    }
}
else
{
    header('Location: cadastradocam.php');
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
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
  
<div class="fadeIn first">




    <form action="salvaredit.php" method="post">
    <h4>Editar Cadastro </h4>
    <input type="text" id="Modelo" class="fadeIn second" name="Modelo" placeholder="Modelo" value="<?php  echo $modelo; ?>" >
<input type="text" id="tombo" class="fadeIn second" name="tombo" placeholder="Tombo" value="<?php  echo $tombo; ?>">
<input type="text"  id="setor" class="fadeIn second" name="setor" placeholder="Secretária/Setor " value="<?php  echo $setor; ?>">
<input type="text" id="responsavel" class="fadeIn second" name="responsavel" placeholder="Usuário/Função" value="<?php  echo $responsavel; ?>">

<input type="radio" id="ok" class="fadeIn second"   name="status" value=" ok "  value="ok"<?php  echo ($status == 'ok') ? 'checked' : '' ; ?> required>
<label for="ok">Ok</label>


<input type="radio" id="manutencao" name="status" class="fadeIn second" value=" manutencao "<?php  echo ($status == 'manutencao') ? 'checked' : '' ;?> placeholder="Status" required>
<label for="manutenção">Manutenção</label>

<input type="text" id="observacao"  class="fadeIn second" name="observacao" value="<?php  echo $observacao ?>"placeholder="Obervação">
<input type="date" id="data_cadastrato" class="fadeIn second"  value="<?php  echo $cadastro ?>"name="data_cadastrato" >
<input type="hidden" name="id" value= "<?php echo $id ?>">
<input type="submit" name="update" class="fadeIn third"  id="update" >

    </form>

  </div>


</div>


</body>
</html>