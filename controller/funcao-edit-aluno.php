<?php
    include("../model/connect.php");
    $query = mysqli_query($conexao,"SELECT * FROM alunos where Aluno_Codigo = ".$_GET["ida"]);
    $exibe = mysqli_fetch_array($query);
?>