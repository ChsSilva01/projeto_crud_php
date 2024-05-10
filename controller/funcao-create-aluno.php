<?php
    include("../model/connect.php");
    //Variável global, variáveis do php
    mysqli_query($conexao, "INSERT INTO alunos(Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('".$_POST["campo_nome"]."','".$_POST["campo_cidade"]."','".$_POST["campo_curso"]."')");
    //Ir para um determinado local
    header("location:../view");
?>