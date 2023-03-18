<label for="Asignatura">Asignatura</label>
<input type="text" name="Asignatura" value="{{ isset($calificacion->asignatura)?$calificacion->asignatura:'' }}" id="Asignatura">
<br>
<label for="Actividad1">Actividad 1</label>
<input type="text" name="Actividad1" value="{{ isset($calificacion->actividad1)?$calificacion->actividad1:'' }}" id="Actividad1">
<br>
<label for="Calificacion_1">Calificacion 1</label>
<input type="text" name="Calificacion 1" value="{{ isset($calificacion->calificacion_1)?$calificacion->calificacion_1:'' }}" id="Calificacion_1">
<br>
<label for="Actividad2">Actividad 2</label>
<input type="text" name="Actividad2" value="{{ isset($calificacion->actividad2)?$calificacion->actividad2:'' }}" id="Actividad2">
<br>
<label for="Calificacion_2">Calificacion 2</label>
<input type="text" name="Calificacion 2" value="{{ isset($calificacion->calificacion_2)?$calificacion->calificacion_2:'' }}" id="Calificacion_2">
<br>
<input type="submit" value="Guardar datos">

<a href="{{ url('superheroe/') }}">Regresar</a>
<br>