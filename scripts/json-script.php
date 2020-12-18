<?php

// Including Database
include __DIR__ . '/../data/database.php';

if (empty($_GET) ) {
    header('Content-Type: application/json');
    echo json_encode($database);

} else {
    $filter = $_GET['artista'];
    
    if ($filter != 'all') {
        $dbFiltered = [];
        foreach ($database as $data) {
            if (in_array($filter, $data)) {
                array_push($dbFiltered, $data);   
            }    
        }
        header('Content-Type: application/json');
        echo json_encode($dbFiltered);
    } else {
        header('Content-Type: application/json');
        echo json_encode($database);
    }
}

?>