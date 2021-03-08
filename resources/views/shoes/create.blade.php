<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">


<div class="container">
<h1>Formulario para crear un nuevo registro</h1>
  <form action="{{ route('shoes.store') }}"  method="post"> 

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
      <label for="">Numero:</label>
      <input class="form-control" type="number" name="number" id="" placeholder="Numero">
        
     </div>

     <div>
      <label for="">Hombre:</label>
      <input class="form-control" type="text" name="men" id="" placeholder="Hombre">
        
     </div>

     

     <div>
      <label for="">Mujer:</label>
      <input class="form-control" type="text" name="woman" id="" placeholder="Mujer">
        
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