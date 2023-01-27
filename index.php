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

            const INCL_PATH = 'includes/';
        
            include INCL_PATH.'menu.php';

            $weekday = (int) date('w');

        ?>
    </head>
    <body>
        <?php include INCL_PATH.'banner.php' ?>

        <main>
            <?php menu_tables($weekday) ?>
        </main>

        <?php include INCL_PATH.'foot.php' ?>
    </body>
</html>