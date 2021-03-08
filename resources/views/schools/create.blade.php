<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">


<div class="container">
<h1>Formulario para crear un nuevo registro</h1>
  <form action="{{ route('schools.store') }}"  method="post"> 

    @csrf
  
    <div>
        <label for="">Nombre:</label>
        <input  class="form-control" type="text" name="name" id="" placeholder="Nombre">
 
    </div>

     <div>
      <label for="">Nivel:</label>
      <input class="form-control" type="text" name="level" id="" placeholder="Nivel">
        
     </div>

     <div>
      <label for="">Zona:</label>
      <input class="form-control" type="text" name="zone" id="" placeholder="Zona">
        
     </div>

     <div>
      <label for="">Ubicación:</label>
      <input class="form-control" type="text" name="location" id="" placeholder="Ubicación">
        
     </div>
     

     <div>
      <label for="">Clave:</label>
      <input class="form-control" type="text" name="kayCode" id="" placeholder="Clave">
        
     </div>

     <div>
      <label for="">Numero de estudiantes:</label>
      <input class="form-control" type="number" name="numberOfStuden" id="" placeholder="Numero de estudiantes">
        
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