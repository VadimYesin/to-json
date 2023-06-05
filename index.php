<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $titles = $_POST['title'];
    $descriptions = $_POST['description'];

    function encodeNewlines(array $strings) {
        $result = [];
        foreach ($strings as $string) {
            $encodedString = str_replace(array("\r\n", "\r", "\n"), "\\n", $string);
            $encodedString = str_replace('"', '\"', $encodedString);
            $result[] = $encodedString;
        }

        return $result;
    }

    $encodedDescriptions = encodeNewlines($descriptions);

    // Виведення даних за допомогою var_dump()
    echo "<h2>Дані з форми:</h2>";
    echo "<pre>";
    foreach ($encodedDescriptions as $key => $value) {
        var_dump($titles[$key], $value);
    }
    echo "</pre>";
}