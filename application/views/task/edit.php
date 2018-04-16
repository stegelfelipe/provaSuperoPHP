<br>
<div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <form action="<?php echo base_url('atualizar/'.$task->id_task); ?>" method="post">
      <div class="row">
        <div class="col-lg-4">
          <label for="title">Titulo</label>
          <input type="text" value="<?php echo $task->title; ?>" name="title" placeholder="O que você vai fazer?" class="form-control" required><br>
        </div>
      </div>

      <label for="description">Descrição</label>
      <textarea name="description" id="description" placeholder="Informe os detalhes" class="form-control" required><?php echo $task->description; ?></textarea>

      <br><br>

      <button class="btn btn-lg btn-primary">ATUALIZAR</button>
    </form>
  </div>
</div>
