<?php
include ("conexao.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha= password_hash ($_POST['senha'],PASSWORD_DEFAULT);


    $sql= "INSERT INTO usuario(nome, email, senha)
    VALUES('$nome', '$email', '$senha')";
    if($conexao=mysqli_query($conexao, $sql)){
        echo"cadastro realizado com sucesso";
    }
    else{
        echo"erro ao cadastra-se".mysqli_connect_error($conexao);
    }


?>