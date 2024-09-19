<?php
    //extabelecemos um conexão com o banco de dados
    $conexao = mysqli_connect('127.0.0.1','root','');
    //selecionamos a database que vamos utilizar
    mysqli_select_db($conexao,'projeto_crud_php_t1');
    //definimos a linguagem como português
    mysqli_set_charset($conexao,'UTF8');
?>
