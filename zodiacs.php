<?php
require_once 'functions.php';
require_once './parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once './pages/zodiacs.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = [];
    foreach ($_POST['zodiacs'] as $k_planet => $planet) {
        foreach ($planet['Zodiacs'] as $k_zodiac => $zodiac) {
            if (empty($zodiac['Title'])) { continue; }
            $result[$k_planet]['Zodiacs'][$k_zodiac]['Title'] = encodeDescription($zodiac['Title']);
            $result[$k_planet]['Zodiacs'][$k_zodiac]['Description'] = encodeDescription($zodiac['Description']);
        }
    }
    var_dump(json_encode($result, JSON_UNESCAPED_UNICODE));
}