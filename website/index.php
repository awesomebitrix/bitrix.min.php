<?php

var_dump($_SERVER["DOCUMENT_ROOT"]);

echo "1\n";
$path = "" . "bitrix/header.php";
include $path;

echo "2\n";
$path2 = "bitrix/header.php";
include $path2;

echo "3\n";
$path3 = "";
include $path3 . "bitrix/header.php";

echo "4\n";
// works only this
include "bitrix/header.php";

//$path = substr($_SERVER["DOCUMENT_ROOT"], 0, -1) . "/bitrix/header.php";
?>

<?php //require "./bitrix/header.php" // static path work ?>
<?php

/*
//$APPLICATION->SetTitle("Главная");

echo "Hello World!\n\n";
echo rand(1, 1000) . "\n\n";

?>

---

Taks list example:

<?php foreach ($page["tasks"] as $task) { ?>

	Task: [<?= $task["STATUS"] == 5? "x" : "-"?>] <?= $task["NAME"]?> (<?= $task["ID"]?>)
		Elapsed time, hours: <?= $task["TIME"] / 60 ?>

<?php } ?>

---

?>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" */ ?>