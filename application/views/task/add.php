<form action="<?php echo base_url('inserir'); ?>" method="post">
  <div class="row">
    <div class="col-lg-4">
      <label for="title">Titulo</label>
      <input type="text" name="title" placeholder="O que você vai fazer?" class="form-control" required><br>
    </div>
  </div>

  <label for="description">Descrição</label>
  <textarea name="description" id="description" placeholder="Informe os detalhes" class="form-control" required></textarea>

  <br><br>

  <button class="btn btn-lg btn-primary">ADICIONAR</button>
</form>
