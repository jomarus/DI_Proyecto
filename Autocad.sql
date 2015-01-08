SELECT estudiantes.nombre, estudiantes.apellidos, cursos.curso, cursos_estudiantes.fecha_Descarga FROM estudiantes
INNER JOIN cursos_estudiantes
	ON estudiantes.id = cursos_estudiantes.estudiante_id
INNER JOIN cursos
	ON cursos.id = cursos_estudiantes.curso_id
WHERE cursos.curso= 'Autocad'
ORDER BY estudiantes.nombre;