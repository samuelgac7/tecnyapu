<!-- resources/views/reports/proyectos.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Informe de Proyectos</title>
</head>
<body>
    <h1>Informe de Proyectos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Propietario</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->nombre }}</td>
                    <td>{{ $proyecto->propietario }}</td>
                    <td>{{ $proyecto->direccion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>