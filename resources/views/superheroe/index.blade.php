<a href="{{ url('superheroe/create') }}">Registrar calificacion</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Asignatura</th>
            <th>Actividad 1</th>
            <th>Calificacion 1</th>
            <th>Actividad 2</th>
            <th>Calificacion 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach($superheroes2 as $calificacion)
        <tr>
            <td>{{ $calificacion->id }}</td>
            <td>{{ $calificacion->asignatura }}</td>
            <td>{{ $calificacion->actividad1 }}</td>
            <td>{{ $calificacion->calificacion_1 }}</td>
            <td>{{ $calificacion->actividad2 }}</td>
            <td>{{ $calificacion->calificacion_2 }}</td>
            <td>
            
            <a href="{{ url('/superheroe/'.$calificacion->id.'/edit') }}">
                    Editar
            </a>
             | 
            
            <form action="{{ url('/superheroe/'.$calificacion->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">

            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>