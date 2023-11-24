
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>
    <?php require "../views/common/header.php"?>
    <main role="main" class="container">
      <h1 class="mt-5">Usuarios de la App</h1>
      <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Cumpleaños</th>
            </tr>
            
            <?php foreach ($users as $user) { ?>
              <tr>
              <td><?php echo $user->name ?></td>
              <td><?php echo $user->surname ?></td>
              <td><?php echo $user->email ?></td>
              <td><?php echo $user->birthdate?></td>
              <td><a href="/user/show/<?php echo $user->id ?>">Ver usuario</a></td>
              <td>&nbsp</td>
              <td><a href="/user/edit/<?php echo $user->id ?>">Modificar </a></td>
              <td>&nbsp</td>
              <td><a href="/user/delete/<?php echo $user->id ?>">Borrar </a></td>
              </tr>
            <?php } ?>
        </table>
    </main>
    <?php require "../views/common/footer.php"?>
    <?php require "../views/common/script.php"?>
  </body>
</html>
