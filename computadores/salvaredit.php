<?php
    // isset -> serve para saber se uma variável está definida
    include_once('banco/conexao.php');
    if(isset($_POST['update']))
    {  
        $id = $_POST['id'];
        $modelo = $_POST['Modelo'];
        $tombo =  $_POST['tombo'];
        $setor =  $_POST['setor'];
        $responsavel =  $_POST['responsavel'];
        $status =  $_POST['status'];
        $observacao =  $_POST['observacao'];
        $cadastro=  $_POST['data_cadastrato'];
        
        
        $sqlupdate = "UPDATE dti
        SET Modelo='$modelo',tombo='$tombo',setor='$setor',responsavel='$responsavel',
        status='$status',observacao='$observacao',data_cadastrato='$cadastro' WHERE id = '$id'";
          $result = $conexao->query($sqlupdate);


        
    }
    header('Location: cadastradocam.php');

?>