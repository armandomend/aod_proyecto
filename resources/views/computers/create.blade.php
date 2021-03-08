<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">


<div class="container">
<h1>Formulario para crear un nuevo registro</h1>
  <form action="{{ route('computers.store') }}"  method="post"> 

    @csrf
  
    <div>
        <label for="">Marca:</label>
        <input  class="form-control" type="text" name="brand" id="" placeholder="Marca">
 
    </div>

     <div>
      <label for="">Modelo:</label>
      <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        
     </div>

     <div>
      <label for="">Color:</label>
      <input class="form-control" type="text" name="Color" id="" placeholder="Color">
        
     </div>

     <div>
      <label for="">Tamaño:</label>
      <input class="form-control" type="text" name="size" id="" placeholder="Tamaño">
        
     </div>

     <div>
      <label for="">Capacidad:</label>
      <input class="form-control" type="text" name="capacity" id="" placeholder="Capacidad">
        
     </div>

     <div>
      <label for="">Tipo:</label>
      <input class="form-control" type="text" name="kind" id="" placeholder="Tipo">
        
     </div>



     <div>
      <label for="">Descripción:</label>
      <textarea class="form-control" type="tex" name="description" id="" cols="30" rows="10"></textarea>
        
     </div>

     <div>
      <label for="">Comentario:</label>
      <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        
     </div>

     <input class="btn btn-primary" type="submit" value="Guardar">
  
  </form>


</div>