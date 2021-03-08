@forelse ($phones as $phone)
  <li> 
     <h3> {{$phone->brand}} {{ $phone->model}} </h3> 
     <p>{{ $phone->description}} </p>
     <br>
  </li>
@empty
    <h1>La tabla no tiene registros de telefonos</h1>
@endforelse