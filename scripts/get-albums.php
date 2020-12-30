<?php
// Get Database
require_once __DIR__ . '/../partials/database.php';

// Get albums
$artist = empty($_GET['artist']) ? false : $_GET['artist'];

$albums = [];
if($artist == false || $artist == 'all') {
    $albums = $database;
}
else {
    foreach($database as $album) {
        if($album['author'] == $artist) {
            $albums[] = $album;
        }
    }
}

// Get artist
$artists = [];
foreach($database as $album) {
    if(! in_array($album['author'], $artists)) {
        $artists[] = $album['author'];
    }
}

// Final results
$response = [
    'albums' => $albums,
    'artists' => $artists
];

// Output
header('Content-Type: application/json');
echo json_encode($response);
