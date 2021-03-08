@forelse ($shoes as $shoe)
  <li> 
     <h3> {{$shoe->brand}} {{ $shoe->model}} </h3> 
     <p>{{ $shoe->description}} </p>
     <br>
  </li>
@empty
    <h1>La tabla no tiene registros</h1>
@endforelse