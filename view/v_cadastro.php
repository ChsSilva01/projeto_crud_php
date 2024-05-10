<?php include("blades/top.php"); ?>

<div class="container mt-5">
    <!-- "/" voltar para index -->
    <a href="index.php" class="btn btn-primary">Voltar</a>
</div>

<div class="container mt-2 bg-white p-3 rounded">
    <!-- O que for cadastrado sera "postado" enviado -->
    <form action="../controller/funcao-create-aluno.php" method="post" class="forms">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" name="campo_nome">

        <label class="form-label pt-3">Cidade:</label>
        <input type="text" class="form-control" name="campo_cidade">
        
        <label class="form-label pt-3">Curso:</label>
        <input type="text" class="form-control" name="campo_curso">
        <br>
        <div class="container mt-5 d-flex justify-content-end ">
            <input type="submit" value="Salvar" href="" class="btn btn-primary">
        </div>
    </form>
    <!-- <form action="">
        <label>Nome</label>
        <input type="text">
        <button></button>
    </form> -->
</div>

<?php include("blades/footer.php"); ?>