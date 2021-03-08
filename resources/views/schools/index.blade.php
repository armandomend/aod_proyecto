@forelse ($schools as $school)
  <li> 
     <h3> {{$school->name}} {{ $school->level}} </h3> 
     <p>{{ $school->description}} </p>
     <br>
  </li>
@empty
    <h1>La tabla no tiene registros de escuelas</h1>
@endforelse