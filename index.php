<?php
    const INCL = 'includes/';

    $b_set = isset($_GET['b']);
    $l_set = isset($_GET['l']);
    $d_set = isset($_GET['d']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=UTF-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="The Cafe's Home Page">
        <link rel=stylesheet href=css/base.css>
        <title>
            <?php
                if ($b_set) {
                    echo "Breakfast Menu";
                } else if ($l_set) {
                    echo "Lunch Menu";
                } else if ($d_set) {
                    echo "Dinner Menu";
                } else {
                    echo "Cafe Home Page";
                }
            ?>
        </title>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'header.php' ?>

            <main>
                <?php
                    if ($b_set) {
                        include INCL.'b-menu.php';
                    } else if ($l_set) {
                        include INCL.'l-menu.php';
                    } else if ($d_set) {
                        include INCL.'d-menu.php';
                    } else {
                        include INCL.'specials.php';
                    }
                ?>
            </main>

            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
