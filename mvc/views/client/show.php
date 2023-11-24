<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Detalle Usuario</h1>
        <table>
            <tr>
                <th>Identificador</th>
                <th>Nombre Usuario</th>
            </tr>
            <tr>
                <td><?php echo $user[0]?></td>
                <td><?php echo $user[1]?></td>
            </tr>
            <tr>
                <td><a href="?method=index">Volver al index</a></td>
            </tr>
        </table>
    </body>
</html>