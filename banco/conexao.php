<?php

    $servidor ="localhost";
    $usuario = "root";
    $senha = "";
    $banco = "chamado";

$conexao = new mysqli ($servidor,$usuario,$senha,$banco);
if ($conexao -> connect_errno){
 echo "Banco não cadastrado";
}else{
   //echo "banco conectado ";
}

?>