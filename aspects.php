<?php
require_once './parts/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once './pages/aspects.php';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump(json_encode($_POST['aspects']));
}