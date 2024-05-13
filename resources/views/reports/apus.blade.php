<!-- resources/views/reports/apus.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Informe de APUs</title>
</head>
<body>
    <h1>Informe de APUs</h1>
    <table>
        <thead>
            <tr>
                <th>Proyecto</th>
                <th>Descripción</th>
                <th>Unidad</th>
                <th>Precio Unitario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apus as $apu)
                <tr>
                    <td>{{ $apu->proyecto->nombre }}</td>
                    <td>{{ $apu->descripcion }}</td>
                    <td>{{ $apu->unidad }}</td>
                    <td>{{ $apu->precio_unitario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>