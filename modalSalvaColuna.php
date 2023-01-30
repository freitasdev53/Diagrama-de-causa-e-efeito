<?php
$selectColunas = $arvore->getSelectColunas($_SESSION['IDOco']);
$vagasPreenchidas = array();
$vagasGerais = array(1,2,3,4,5,6,7,8,9,10);
while(odbc_fetch_row($selectColunas)){
  array_push($vagasPreenchidas,odbc_result($selectColunas,"NUColuna"));
}
$vagasDisponiveis = array_diff($vagasGerais,$vagasPreenchidas);;
?>
<div class="modal fade " id="ModalSalvaColuna" tabindex="-10" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Coluna</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCadastroColuna" class="form-controls">
          <input type="hidden" name="NUColuna" value="">
          <input type="hidden" name="IDColuna" value="">
            <div class="row">
                <div class="col-sm-12 efeitoColuna">
                    <label for="nomeFantasia">Efeito</label>
                    <input type="name" id="nomeColuna" class="form-control" maxlength="50" name="nomeColuna">
                </div>
                <div class="col-sm-12 numeroColuna">
                    <label for="nomeFantasia">Coluna</label>
                    <select class="form-control numeroColuna" name="numeroColuna">
                      <?php
                      foreach($vagasDisponiveis as $disp){
                        echo"<option value='$disp'>$disp</option>";
                      }
                      ?>
                    </select>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary bt_salvar_coluna">Salvar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
