<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-tabela.php"); ?>
    <div class="container mt-5 bg-white p-5 rounded">
        <form action="../controller/funcao-login.php" method="post">
            <label class="form-label pt-5">Usuário:</label>
            <input type="text" class="form-control" name="campo_email">
            
            <label class="form-label pt-3">Senha:</label>
            <input type="text" class="form-control" name="campo_senha">

            <div class="container mt-5 d-flex justify-content-end ">
                <input type="submit" value="Logar" href="" class="btn btn-primary">
            </div>
        </form>
    </div>
<?php include("blades/footer.php"); ?>