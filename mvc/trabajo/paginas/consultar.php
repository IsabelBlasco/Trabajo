<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Cerveza</title>
    </head>
    <body>
    <h2>Consulta de Cerveza por ID</h2>
        
        <form name = "flogin" action = "index.php?method=consultar" method="post"> 
            <div>
                <label for="ID">Introduce ID</label>
                <input type="text" name="iID" id="ID">
                <input type="submit" name="ienviar" value="Enviar">
            </div>
        </form>
    </body>
</html>