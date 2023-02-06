<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/base.css">
        <title>Lunch</title>

        <?php
            const INCL = 'includes/';
            include_once INCL.'l-menu.php';
        ?>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'header.php' ?>

            <main>
                <?php draw_menu() ?>
            </main>
            
            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
