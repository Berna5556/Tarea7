<a href="{{ url('superheroe/create') }}">Registrar superheroe</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Nombre real</th>
            <th>Informacion adicional</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($superheroes2 as $superheroe)
        <tr>
            <td>{{ $superheroe->id }}</td>
            <td>
            <img src="{{ asset('storage').'/'.$superheroe->foto }}" width="100" alt="">
            </td>
            <td>{{ $superheroe->nombre }}</td>
            <td>{{ $superheroe->nombre_real }}</td>
            <td>{{ $superheroe->info }}</td>
            <td>
            
            <a href="{{ url('/superheroe/'.$superheroe->id.'/edit') }}">
                    Editar
            </a>
             | 
            
            <form action="{{ url('/superheroe/'.$superheroe->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">

            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>