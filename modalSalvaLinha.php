<div class="modal fade " id="ModalSalvaLinha" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Nome da coluna</h5> -->
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCadastroColuna" class="form-controls">
          <input type="hidden" name="NUColuna" value="">
          <input type="hidden" name="IDLinha" value="">
            <div class="row">
                <div class="col-sm-12 nomeFantasia">
                    <label for="nomeFantasia">Conteudo</label>
                    <br>
                    <textarea class="form-control" rows="5" maxlength="105" resize="none" name="NMConteudo" style="resize: none;"></textarea>
                </div>
                <div class="col-sm-12">
                <br>
                <label for="nomeFantasia">Ligação</label>
                    <input type="color" class="form-control" name="ligacaoColuna">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary bt_salvar_linha">Salvar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
