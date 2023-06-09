<?php
$disk = [
    [
        'photo' => 'img/metal_lifting.jpg',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],
    [
        'photo' => 'foto',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],
    [
        'photo' => 'foto',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],
    [
        'photo' => 'foto',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],
    [
        'photo' => 'foto',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],
    [
        'photo' => 'foto',
        'name' => 'name',
        'artist_name' => 'namename',
        'year' => '1900'
    ],


];

header('content-type: application/json');

echo json_encode($disk);
