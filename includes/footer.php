<?php

$sep      = '&nbsp;|&nbsp;';
$location = 'Location: 264 Comer Hill Rd. Great Falls, MT 59404';
$hours    = 'Hours: 6AM-8PM Sun-Sat';
$phone    = 'Phone: (406) 750-8624';

echo "<footer>$location $sep $hours $sep $phone</footer>";

unset($sep, $location, $hours, $phone);
