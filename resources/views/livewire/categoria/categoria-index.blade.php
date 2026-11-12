<div class="table-responsive table-card">
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th scope="col">Id</th>
        <th scope="col">Categoria</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
        
      </tr>
    </thead>
    <tbody>

        @foreach($categorias as $categoria)

      <tr>
        
        <td>{{ $categoria->id}}</td>
        <td>{{ $categoria->nome}}</td>
        <td><a href="{{route('categoria.edit',['id'=>$categoria->id])}}" class="btn-solid btn-styled theme-primary">Editar</a>
        <td><button type="button" wire:click='excluir({{$categoria->id}})' class="btn-solid btn-styled theme-danger">Excluir</button></td>

        
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>