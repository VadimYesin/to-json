<?php
require_once 'functions.php';
require_once './parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once './pages/houses.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = [];
    foreach ($_POST['houses'] as $k_planet => $planet) {
        foreach ($planet['Houses'] as $k_house => $house) {
            if (empty($house['Title'])) { continue; }
            $result[$k_planet]['Houses'][$k_house]['Title'] = encodeDescription($house['Title']);
            $result[$k_planet]['Houses'][$k_house]['Description'] = encodeDescription($house['Description']);
        }
    }
    var_dump(json_encode($result, JSON_UNESCAPED_UNICODE));
}