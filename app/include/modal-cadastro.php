
<div class="modal fade" id="modalCadastrar" tabindex="-1" aria-labelledby="modalCadastrar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="include/cadastrar.php" method="post" id="meuForm" >
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" required>
                    <label for="dtnasc" class="form-label">Data de Nascimento</label>
                    <input type="date" name="dtnasc" class="form-control" required>
                </form>
            </div>
            <div class="modal-footer">
            <button type="submit" form="meuForm" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             

            </div>
        </div>
    </div>
</div>