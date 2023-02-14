<?php
    const INCL = 'includes/';
    const DATA = 'data/';

    $first_name = $_POST['user-first'];
    $last_name = $_POST['user-last'];
    $email = $_POST['user-email'];
    $pass = $_POST['user-pass'];
    
    $users = array_map(
        'str_getcsv',
        file(
            DATA.'users.csv',
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        )
    );

    $user_exists = false;

    foreach ($users as $user) {
        if ($user[0] == $first_name && $user[1] == $last_name && $user[2] == $email) {
            $user_exists = true;
            break;
        }
    }

    $correct_pass = false;

    if ($user_exists) {
        $correct_pass = password_verify($pass, $user[3]);
    } else {
        $users = array($first_name, $last_name, $email, password_hash($pass, PASSWORD_DEFAULT));
        $fp = fopen(DATA.'users.csv', 'a');
        fputcsv($fp, $users);
        fclose($fp);
    }

    $return_to_index = $user_exists && !$correct_pass;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Cafe's Home Page (and Daily Special)">
        <link rel="stylesheet" href="css/base.css">
        <title>Cafe Home Page</title>
    </head>
    <body>
        <div id="container">
            <?php include INCL.($return_to_index ? 'banner.php' : 'header.php') ?>

            <main>
                <?php include INCL.($return_to_index ? 'return_to_index.php' : 'specials.php') ?>
            </main>

            <?php include INCL.'footer.php' ?>
        </div>
    </body>
</html>
