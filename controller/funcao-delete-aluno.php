<?php
    include("../model/connect.php");
    //executamos e guardamos um comando SQL dentro de uma variável, além disso por meio de um get pegamos o id do aluno especifico
    $query = mysqli_query($conexao, "SELECT Aluno_Foto FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
    //as informações antes armazenada agora são organizada em um array e armazenadas
    $exibe = mysqli_fetch_array($query);
    //por meio do unlink deletamos um arquivo do caminho desejado, e 
    unlink("../view/imgs/$exibe[0]"); 
    //executamos uma função SQL para deletar a tabelo do aluno que desejamos por meio de um get
    mysqli_query($conexao, "DELETE FROM alunos WHERE Aluno_Codigo = ".$_GET["ida"]);
    //voltamos para a tela principal
    header("location:../view/");
?>
