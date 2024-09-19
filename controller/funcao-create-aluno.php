<?php
    //incluindo a conexão com o banco de dados
    include("../model/connect.php");

    //
    $arquivo = $_FILES["arquivo"];
    //
    $file_name = $_FILES['arquivo']['name'];
    //estamos guardando em uma váriavel a extenção da nossa imagem
    $extensao = pathinfo($file_name, PATHINFO_EXTENSION);
    //agora estamos fazendo um nome aleatório, criptografando e adicionando sua extensão
    $nomeCompleto = md5(uniqid(pow(date("s"),date("m")))) . "." . $extensao;

    //salvamos o caminho da imagem em um variável
    $destino = "../view/imgs/".$nomeCompleto;
    //agora movemos a imagem com o nome alterado para o seu destino
    move_uploaded_file($arquivo['tmp_name'],$destino);
    //pelo query executamos um comando SQL
    mysqli_query($conexao, "INSERT INTO alunos(Aluno_Foto,Aluno_Nome, Aluno_Cidade, Aluno_Curso) VALUES ('".
    $nomeCompleto."','".$_POST
    ["campo_nome"]."','".$_POST
    ["campo_cidade"]."','".$_POST
    ["campo_curso"]."')");
    //por fim voltamos para os view's pelo header
    header("location:../view");
?>
