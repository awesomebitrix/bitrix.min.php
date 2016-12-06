<?php

namespace HelloWorld;

$s = microtime(true);

//var_dump(defined("__DIR__"));
//var_dump(defined("__FILE__"));
//var_dump(__DIR__);

require ".init.php";

function TasksSelect() {
	return [
		[
			"ID" => 1,
			"NAME" => "Task 1",
			"TIME" => "30",
			"STATUS" => 1,
		],
		[
			"ID" => 2,
			"NAME" => "Task 2",
			"TIME" => "60",
			"STATUS" => 2,
		],
		[
			"ID" => 3,
			"NAME" => "Task 3",
			"TIME" => "240",
			"STATUS" => 5,
		],
	];
}

// view data
$page = [
	"template" => "./templates/default/",
	"view" => ".view/index.php",
	"tasks" => TasksSelect()
];

// view render
include $page["template"] . "header.php";
include $page["view"];
include $page["template"] . "footer.php";

echo "Time: " . (microtime(true) - $s);
echo "\n";
