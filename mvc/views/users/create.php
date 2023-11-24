<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    <body>
        <h1>Crear usuario</h1>
        <form name="create" action="/user/store" method="post"> 
            <div>
                <label for="name">Introduce Nombre</label>
                <input type="text" name="name" id="name">
                <br><br><br>
                <label for="surname">Introduce Apellido</label>
                <input type="text" name="surname" id="surname">
                <br><br><br>
                <label for="email">Introduce Email</label>
                <input type="text" name="email" id="email" >
                <br><br><br>
                <label for="birthdate">Introduce Cumpleaños</label>
                <input type="date" name="birthdate" id="birthdate">
                <br><br><br>
                <input type="submit" name="ienviar" value="Login">
            </div>
        </form>
    </body>
</html>