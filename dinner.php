<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/base.css">
        <title>Dinner</title>

        <?php const INCL = 'includes/'; ?>
    </head>
    <body>
        <div id="container">
            <?php include INCL.'header.php' ?>

            <main>
                <?php include_once INCL.'menu/d-menu.php' ?>
            </main>
            
            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
