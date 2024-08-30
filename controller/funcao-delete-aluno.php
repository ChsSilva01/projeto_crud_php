<?php
    include("../model/connect.php");
    $query = mysqli_query($conexao, "SELECT Aluno_Foto FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
    $exibe = mysqli_fetch_array($query);
    unlink("../view/imgs/$exibe[0]"); 
    mysqli_query($conexao, "DELETE FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
    header("location:../view/");
?>