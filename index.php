<?php const INCL = 'includes/'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Cafe's Home Page (and Daily Special)">
        <link rel="stylesheet" href="css/base.css">
        <title>Cafe Login</title>
        <script src="scripts/handleLogin.js" defer></script>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'banner.php' ?>

            <main>
                <form id="login-form" action="home.php" method="post">
                    <fieldset>
                        <input type="text" name="user-first" id="firstName" placeholder="First Name">
                        <input type="text" name="user-last" id="lastName" placeholder="Last Name">

                        <label for="mail">Email</label>
                        <input id="mail" name="user-email" type="email" placeholder="example@example.com">

                        <label for="pass">Password</label>
                        <input id="pass" name="user-pass" type="password">

                        <input type="submit" id="login" value="Login/Register">
                    </fieldset>
                </form>
            </main>

            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
