<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=UTF-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="The Cafe's Home Page">
        <link rel=stylesheet href=css/base.css>
        <title>Cafe Home Page</title>

        <?php
            const INCL = 'includes/';
            include_once INCL.'specials.php';
            $weekday = (int) date('w');
        ?>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'header.php' ?>

            <main>
                <?php draw_specials($weekday) ?>
            </main>

            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
