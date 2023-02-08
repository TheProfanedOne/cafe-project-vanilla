<?php const INCL = 'includes/'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Cafe's Breakfast Menu">
        <link rel="stylesheet" href="css/base.css">
        <title>Breakfast</title>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'header.php' ?>

            <main>
                <?php include_once INCL.'b-menu.php' ?>
            </main>

            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
