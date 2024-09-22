<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Publicidad</th>
                <th>Mensaje</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
            <tr>
                <td>{{ $contacto->nombre }}</td>
                <td>{{ $contacto->email }}</td>
                <td>{{ $contacto->publicidad ? 'Sí' : 'No' }}</td>
                <td>{{ $contacto->mensaje }}</td>
                <td>{{ $contacto->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Lilian Paredes - 202325512</h3>
</body>
</html>
