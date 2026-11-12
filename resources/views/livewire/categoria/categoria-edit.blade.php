<div class="container py-8">
    <div class="text-center">
        <br>
        <h4>Editar Categoria</h4>
    <br>
    <br>
    <form wire:submit.prevent='update'>
    <div class="input-group">
  <input type="text" class="form-control" wire:model='nome' placeholder="Criar categoria..."  
  aria-label="Example text with button addon" aria-describedby="button-addon">
        
  <div class="col-auto">
    <button type="update" class="btn-solid theme-primary mb-3">Atualizar Categoria</button>
  </div>
</div>
    </form>
</div>
</div>
