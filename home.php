<?php
    const INCL = 'includes/';

    $first_name = $_POST['user-first'];
    $last_name = $_POST['user-last'];
    $email = $_POST['user-email'];
    $pass = $_POST['user-pass'];

    include INCL.'db-conn.php';
    
    $stmt = mysqli_prepare($db_con,
        "SELECT (pass) FROM users WHERE first_name = ? AND last_name = ? AND email = ?"
    );
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $user_exists = false;
    $correct_pass = false;

    if (mysqli_num_rows($result) == 1) {
        $user_exists = true;
        $user = mysqli_fetch_assoc($result);
        $correct_pass = password_verify($pass, $user['pass']);
    } else if (mysqli_num_rows($result) > 1) {
        die("Error: Multiple users with the same name and email address.");
    } else {
        $new_user = array($first_name, $last_name, $email, password_hash($pass, PASSWORD_DEFAULT));
        $stmt = mysqli_prepare($db_con,
            "INSERT INTO users (first_name, last_name, email, pass) VALUES (?, ?, ?, ?)"
        );
        mysqli_stmt_bind_param($stmt, "ssss", ...$new_user);
        mysqli_stmt_execute($stmt);
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
