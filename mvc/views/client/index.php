
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
      <h1 class="mt-5">Clientes de la App</h1>
      <table>
            <tr>
                <th>Identificador</th>
                <th>Nombre Usuario</th>
            </tr>
            <tr>
              <td><?php echo $user->id ?></td>
              <td><?php echo $user->name ?></td>
              <td><?php echo $user->surname ?></td>
              <td><?php echo $user->email ?></td>
              <td><?php echo $user->birthdate?></td>
            </tr>
            <tr>
                <td><a href="?method=index">Volver al index</a></td>
            </tr>
        </table>
    </main>
    <?php require "../views/common/footer.php"?>
    <?php require "../views/common/script.php"?>
  </body>
</html>
