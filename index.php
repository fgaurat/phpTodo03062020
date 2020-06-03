<?php include('index.inc.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include('bootstrap.inc.php') ?>
</head>

<body class="text-center">
    <div class="container">

    <?php if($login_ko):?>
        <div class="alert alert-danger" role="alert">
            Erreur de connexion
        </div>
    <?php endif;?>


        <form class="form-signin" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="hidden" name="login_form" value="login_form">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <label for="inputLogin" class="sr-only">Login</label>
            <input type="text" id="inputLogin" name="inputLogin" class="form-control" placeholder="Login" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </div>

    
</body>

</html>