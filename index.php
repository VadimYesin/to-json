<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $titles = $_POST['title'];
    $descriptions = $_POST['description'];

    // Виведення даних за допомогою var_dump()
    echo "<h2>Дані з форми:</h2>";
    echo "<pre>";
    echo "Заголовки:\n";
    var_dump($titles);
    echo "Описи:\n";
    var_dump($descriptions);
    echo "</pre>";
}