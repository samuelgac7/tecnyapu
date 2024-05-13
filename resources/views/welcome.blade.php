<!DOCTYPE html>
<html>
<head>
    <title>Mi Aplicación</title>
</head>
<body>
    <h1>Bienvenido a Mi Aplicación</h1>
    
    <ul>
        <li><a href="{{ route('proyectos.index') }}">Ver Proyectos</a></li>
        <li><a href="{{ route('proyectos.create') }}">Crear Proyecto</a></li>
        <li><a href="{{ route('apus.index') }}">Ver APUs</a></li>
        <li><a href="{{ route('apus.create') }}">Crear APU</a></li>
        <li><a href="{{ route('reportes.proyectos.excel') }}">Descargar Reporte de Proyectos (Excel)</a></li>
        <li><a href="{{ route('reportes.proyectos.pdf') }}">Descargar Reporte de Proyectos (PDF)</a></li>
        <li><a href="{{ route('reportes.apus.excel') }}">Descargar Reporte de APUs (Excel)</a></li>
        <li><a href="{{ route('reportes.apus.pdf') }}">Descargar Reporte de APUs (PDF)</a></li>
    </ul>
</body>
</html>