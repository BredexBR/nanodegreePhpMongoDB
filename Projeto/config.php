<?php

require_once __DIR__ . '/../env.php';

$mongoUri = "mongodb://".DB_USER.":".DB_PASS."@".DB_HOST.":".DB_PORT."/".DB_NAME."?authSource=".DB_USER;;

$conn = new MongoDB\Driver\Manager($mongoUri);

?>

