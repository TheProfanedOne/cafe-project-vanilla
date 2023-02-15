<?php

$server_name = "localhost";
$username = "steverq1_matthew";
$password = "Csci213+#001";
$db_name = "steverq1_matthew";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db_con = mysqli_connect($server_name, $username, $password, $db_name);

unset($server_name, $username, $password, $db_name);
