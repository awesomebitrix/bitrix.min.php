<?php

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

