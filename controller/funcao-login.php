<?php
    include("../model/connect.php");
    $query = mysqli_query($conexao,"SELECT * FROM login_aluno WHERE Login_Email = '".trim($_POST['campo_email'])."' AND Login_Senha = '".md5($_POST['campo_senha'])."'");
    //fazemos uma varificação pela função SQL executada anteriormente, caso haja um usuário com aquela informações ele vai nos retornar uma linha, e com a estrutura condicional fazemos o usuário ir para a tela principal, caso não exista nenhum usuário com essas informações permanece na tela login
    if(mysqli_num_rows($query)==1){
        header("location:../view");
    } else {
        header("location:../view/login.php");
    }
?>
