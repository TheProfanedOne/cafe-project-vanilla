<?php

$sep      = '&nbsp;|&nbsp;';
$location = 'Location: 264 Comer Hill Rd. Great Falls, MT 59404';
$hours    = 'Hours: 6AM-8PM Sun-Sat';
$phone    = 'Phone Number: (406) 750-8624';

echo "<footer id=foot>$location $sep $hours $sep $phone</footer>";

unset($sep, $location, $hours, $phone);
