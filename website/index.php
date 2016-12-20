<?php require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php" ?>
<?php

//$APPLICATION->SetTitle("Главная");

echo "<pre>";

var_dump(__FILE__);
var_dump(__DIR__);

const ID = 111;

define("ID_OLD", 111);

var_dump("const: " . ID, "define: " . ID_OLD);

print_r($_SERVER);
echo "</pre>";

echo "Hello World!\n\n";
echo rand(1, 1000) . "\n\n";

/*
?>

---

Taks list example:

<?php foreach ($page["tasks"] as $task) { ?>

	Task: [<?= $task["STATUS"] == 5? "x" : "-"?>] <?= $task["NAME"]?> (<?= $task["ID"]?>)
		Elapsed time, hours: <?= $task["TIME"] / 60 ?>

<?php } ?>

---
*/
?>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php" ?>