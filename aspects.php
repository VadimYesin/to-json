<?php
require_once 'functions.php';
require_once './parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once './pages/aspects.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = [];
    foreach ($_POST['aspects'] as $k_planet => $planet) {
        foreach ($planet['Aspects'] as $k_aspect => $aspect) {
            foreach ($aspect as $type => $value) {
                if (empty($value['Title'])) { continue; }
                $result[$k_planet]['Aspects'][$k_aspect][$type]['Title'] = encodeDescription(trim($value['Title']));
                $result[$k_planet]['Aspects'][$k_aspect][$type]['Description'] = encodeDescription(trim($value['Description']));
            }
        }
    }
    var_dump(json_encode($result, JSON_UNESCAPED_UNICODE));
}