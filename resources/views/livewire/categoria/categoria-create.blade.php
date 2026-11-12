<div class="container py-8">
    <div class="text-center">
        <br>
        <h4>Cadastro De Categoria</h4>
    <br>
    <br>
    <form wire:submit='store'>
    <div class="input-group">
  <input type="text" class="form-control" wire:model='nome' placeholder="Criar categoria..."  
  aria-label="Example text with button addon" aria-describedby="button-addon">
        
  <div class="col-auto">
    <button type="submit" class="btn-solid theme-primary mb-3">Salvar</button>
  </div>
</div>
    </form>
</div>
</div>
