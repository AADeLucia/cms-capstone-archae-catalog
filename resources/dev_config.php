<?php
$root_directory = "/Users/ChadGainnes/Desktop/cms-capstone-archae-catalog/";
return [
    'database' => [
        'host' => "compsci03.rollins.edu",
        'name' => "rcalcollection",
        'user' => "remote_access",
        'pass' => 'rcaldb'
    ]
    'media' => $root_directory . 'media/';
    'artifact_photos' => $root_directory . 'media/artifacts/';
    'carousel_photos' => $root_directory . '/media/carousel/';
    'includes' => $root_directory . "/resources/includes/";
];
?>
