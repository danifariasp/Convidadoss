<?php

$servidor = "127.0.0.1";

$usuario = "root";

$senha = "sebrae123";

$banco = "ETEC";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error)
{
    echo "Não foi possivel conectar";
}

else 
{
    $id = $_GET['id'];
    $sqlexcluir= "DELETE FROM Convidados where id_convidados ={$id}";
    $conexao -> query($sqlexcluir);
    header('Location: convidados.php');

  
}
?>