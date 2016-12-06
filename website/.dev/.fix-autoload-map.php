<?php

$fname = __DIR__ . "/composer/autoload_classmap.php";

$s = file_get_contents($fname);
$s = str_replace('$baseDir . ', "", $s);
$s = str_replace('$vendorDir . \'', "'/vendor", $s);

//echo $s;

file_put_contents($fname, $s);
