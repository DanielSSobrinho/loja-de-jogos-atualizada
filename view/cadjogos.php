<?php
include_once("header.php");
?>

<div class="container">

<form class="row g-3" action="../controler/inserirCadastroJogos.php" method="Get">
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nomejogo" class="form-control" id="inputNome" required>
  </div>
  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" name="valorjogo" class="form-control" id="inputValor" required>
  </div>
  <div class="col-6">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text" name="generojogo" class="form-control" id="inputGenero" placeholder="(11)969480059" required>
  </div>
  <div class="col-6">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <input type="text" name="qtdjogo" class="form-control" id="inputQuantidade" placeholder="777.777.777-77" required>
  </div>
  <div class="col-md-4">
    <label for="inputLancamento" class="form-label">Lançamento</label>
    <input type="date" name="datalancamentojogo" class="form-control" id="inputLancamento" placeholder="00000-000" required>
  </div>
  <div class="col-4">
    <label for="inputStudio" class="form-label">Studio</label>
    <input type="text" name="studiojogo" class="form-control" id="inputStudio" placeholder="00" required>
  </div>

 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>

</div>

<?php
include_once("footer.php");
?>