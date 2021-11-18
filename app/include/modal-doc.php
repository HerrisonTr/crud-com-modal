<div class="modal fade" id="modalDoc<?php echo $rowCli[0]?>" tabindex="-1" aria-labelledby="modalDoc" aria-hidden="true">
    <script type="text/javascript">
        $("#telefone, #celular").mask("(00) 00000-0000");
        $("#cpf").mask("000.000.000-00");
    </script>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Documentos de <?php echo $rowCli[1] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="include/cadastrarDoc.php?idcli=<?php echo $rowCli[0] ?>" method="post" id="form-doc<?php echo $rowCli[0]?>">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" required>
                    <label for="rg" class="form-label">RG</label>
                    <input type="text" name="rg" class="form-control" required>
                </form>

            </div>
            <div class="modal-footer">
                <button type="submit" form="form-doc<?php echo $rowCli[0]?>" class="btn btn-success">Cadastrar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


            </div>
        </div>
    </div>
</div>