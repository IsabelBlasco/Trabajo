<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create</title>
    </head>
    <body>
        <h1>Editar usuario</h1>
        <form name="create" action="/user/update" method="post"> 
            <div>
                <label for="name">Introduce Nombre</label>
                <input type="text" name="name" value="<?php echo $user->name?>">
                <br><br><br>
                <label for="surname">Introduce Apellido</label>
                <input type="text" name="surname" id="surname" value="<?php echo $user->surname?>">
                <br><br><br>
                <label for="email">Introduce Email</label>
                <input type="text" name="email" id="email" value="<?php echo $user->email?>">
                <br><br><br>
                <label for="birthdate">Introduce Cumpleaños</label>
                <input type="date" name="birthdate" id="birthdate" value="<?php echo $user->birthdate?>">
                <br><br><br>
                <input type="hidden" name="id" value="<?php echo $user->id?>">
                <input type="submit" name="ienviar" value="Enviar">
            </div>
        </form>
    </body>
</html>