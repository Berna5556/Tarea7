<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ isset($superheroe->nombre)?$superheroe->nombre:'' }}" id="Nombre">
<br>
<label for="Nombre_real">Nombre Real</label>
<input type="text" name="Nombre_real" value="{{ isset($superheroe->nombre_real)?$superheroe->nombre_real:'' }}" id="Nombre_real">
<br>
<label for="Info">Informacion adicional</label>
<input type="text" name="Info" value="{{ isset($superheroe->info)?$superheroe->info:'' }}" id="Info">
<br>
<label for="Foto">Foto</label>
@if(isset($superheroe->foto))
<img src="{{ asset('storage').'/'.$superheroe->foto }}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="Guardar datos">

<a href="{{ url('superheroe/') }}">Regresar</a>
<br>