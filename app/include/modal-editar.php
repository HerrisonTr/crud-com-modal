

<div class="modal fade" id="modalEditar<?php echo $rowCli[0]?>" tabindex="-1" aria-labelledby="modalEditar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditar<?php echo $rowCli[0]?>">Editar Cliente <?php echo $rowCli[1]?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="include/editar.php?idedit=<?php echo $rowCli[0]?>" method="post" id="form-editar<?php echo $rowCli[0]?>" >
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" value="<?php echo $rowCli[1]?>" name="nome" class="form-control" required>
                    <label for="dtnasc" class="form-label">Data de Nascimento</label>
                    <input type="date" name="dtnasc" value="<?php echo $rowCli[2]?>" class="form-control" required>
                </form>

            </div>
            <div class="modal-footer">
            <button type="submit" form="form-editar<?php echo $rowCli[0]?>" class="btn btn-success">Editar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             

            </div>
        </div>
    </div>
</div>