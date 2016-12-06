<?php

namespace HelloWorld;

const ID = "hello.world";

define(__NAMESPACE__ . "\URL", $_SERVER["SCRIPT_NAME"]);

echo "\n";
var_dump($_SERVER["SCRIPT_NAME"]);
var_dump(ID);
var_dump(__NAMESPACE__);
var_dump(URL);
echo "\n";
