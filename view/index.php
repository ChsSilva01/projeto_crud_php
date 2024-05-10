<?php include("blades/top.php"); ?>
<?php include("../controller/funcao-tabela.php"); ?>

<div class="container mt-5">
    <a href="v_cadastro.php" class="btn btn-primary">Cadastar</a>
</div>

<div class="container mt-2 bg-white p-3 rounded">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr class="text-center">
                <th>Código</th>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Curso</th>
                <th colspan="2">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php funcaoTabela(); ?>
        </tbody>
        <tfoot>
            <td colspan="6" class="text-center">Rodapé da tabela</td>
        </tfoot>
    </table>
    <!-- <form action="">
        <label>Nome</label>
        <input type="text">
        <button></button>
    </form> -->
</div>

<?php include("blades/footer.php"); ?>