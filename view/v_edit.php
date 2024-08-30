<?php include("blades/top.php"); 
include("../controller/funcao-edit-aluno.php")
?>

<div class="container mt-5">
    <!-- "/" voltar para index -->
    <a href="index.php" class="btn btn-primary">Voltar</a>
</div>

<div class="container mt-2 bg-white p-3 rounded">
    <!-- O que for cadastrado sera "postado" enviado -->
    <form action="../controller/funcao-update-aluno.php" method="post">
        <input type="hidden" name="campo_codigo" value="<?php echo $exibe[0]?>">

        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" name="campo_nome" value="<?php echo $exibe[2]?>">

        <label class="form-label pt-3">Cidade:</label>
        <input type="text" class="form-control" name="campo_cidade" value="<?php echo $exibe[3]?>">
        
        <label class="form-label pt-3">Curso:</label>
        <input type="text" class="form-control" name="campo_curso" value="<?php echo $exibe[4]?>">
        <br>
        <div class="container mt-5 d-flex justify-content-end ">
            <input type="submit" value="Atualizar" class="btn btn-primary">
        </div>
    </form>
    <!-- <form action="">
        <label>Nome</label>
        <input type="text">
        <button></button>
    </form> -->
</div>

<?php include("blades/footer.php"); ?>