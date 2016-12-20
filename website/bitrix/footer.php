<?php

// template footer
include $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/footer.php";

echo "Time: " . (microtime(true) - $start_time);
echo "\n";
