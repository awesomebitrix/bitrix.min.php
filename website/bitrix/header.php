<?php

global $APPLICATION;

$start_time = microtime(true);

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include.php";

// TODO auto generated modules list
include $_SERVER["DOCUMENT_ROOT"] . "/local/modules/hello.world/include.php";
// ...

// template header
include $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/header.php";
