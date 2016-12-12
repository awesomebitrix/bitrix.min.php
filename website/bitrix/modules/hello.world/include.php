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

function TasksSelect() {

	//$db = db();
	//$res = $db->query('SELECT * FROM db');
	//$result = array();
	//foreach ($res->fetchAll() as $row) {
	//	$result[] = array(
	//		'name' => $row['Db'],
	//		'date' => date('Y-m-d H:i:s')
	//	);
	//}

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

/*

// NOTE create map by composer:
//		composer dump-autoload -o

final class CModule {

	static $map = [];

	static function loader($class) {
		if (isset(self::$map[$class]) && !class_exists($class, false)) {
			require _APP_ROOT . self::$map[$class];
		}
		//$fname = str_replace('_', '/', $className) . '.php';
		//require $fname;
	}

	static function AddAutoloadClasses($module, $arParams = []) {
		self::$map = $arParams;

		// your custom map for other classes
		//self::$map["VirtueMartCart"] = _APP_ROOT . "/components/com_virtuemart/helpers/cart.php";

		spl_autoload_register(["\\rivetweb\\CModule", "loader"]);

		// init libs
		//foreach (require _APP_ROOT . "/vendor/composer/autoload_files.php" as $f) {
		//	require $f;
		//}
	}

}
*/

/*
use \rivetweb\CModule;

//define("_APP_DEBUG", 1);

if (!defined("_APP_ROOT")) {
	define("_APP_ROOT", dirname(dirname(__DIR__)));
}
//error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT ^ E_WARNING);
//ini_set("display_errors", 1);
//ini_set("log_errors", 0);
//ini_set("error_log", _APP_ROOT . "/local/log/error_log");

if (!defined("_APP_DATA")) {
  define("_APP_DATA", _APP_ROOT . "/local/data/");
}
if (!defined("_APP_CONFIG")) {
	define("_APP_CONFIG", _APP_ROOT . "/local/data/config/");
}

// FIX locale for fgetcsv
if (setlocale(LC_CTYPE, "ru_RU.UTF-8", "en_US.UTF-8") === false) {
	trigger_error("Error while setlocale: ru_RU.UTF-8, en_US.UTF-8", E_USER_WARNING);
}

CModule::AddAutoloadClasses("", include _APP_ROOT . "/vendor/composer/autoload_classmap.php");
*/
