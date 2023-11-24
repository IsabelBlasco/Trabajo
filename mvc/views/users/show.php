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
            
            <ul>
                <li><strong>Nombre: </strong><?php echo $user->name ?><br></li>
                <li><strong>Apellidos: </strong><?php echo $user->surname ?><br></li>
                <li><strong>Email: </strong><?php echo $user->email ?><br></li>
                <li><strong>F. nacimiento: </strong><?php echo $user->birthdate?><br></li>
            </ul>
            
            <tr>
                <td><a href="?method=index">Volver al index</a></td>
            </tr>
        </table>
    </body>
</html>