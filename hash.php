<?php
include ("conexao.php");
function gerarhash($senha){
    $hash= password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}
?>