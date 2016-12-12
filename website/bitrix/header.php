<?php

global $APPLICATION;

$start_time = microtime(true);

include "bitrix/modules/main/include.php";

// TODO auto generated modules list
include "local/modules/hello.world/include.php";
// ...

include "local/php_interface/init.php";

include "local/templates/.default/header.php";
