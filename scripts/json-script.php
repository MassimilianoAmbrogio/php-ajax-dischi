<?php

// Including Database
include __DIR__ . '/../data/database.php';

if (empty($_GET) ) {
    header('Content-Type: application/json');
    echo json_encode($database);
}

?>