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

    echo "<html><script src=\"https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js\"></script>";
    echo "<head>";
    echo "<title>Сторінка з виведенням даних</title>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Заголовки та описи:</h2>";

    for ($i = 0; $i < count($titles); $i++) {
        echo "<p>";
        echo "<strong>Заголовок:</strong> " . $titles[$i] . "<br>";
        echo "<strong>Опис:</strong> " . $descriptions[$i] . "<br>";
        echo "<button class=\"copy-button\" data-clipboard-target=\"#content-2\">Скопіювати</button>";
        echo "</p>";
    }

    echo "<script>";
    echo "var clipboard = new ClipboardJS('.copy-button');

    clipboard.on('success', function(e) {
      alert('Контент скопійовано!');
      e.clearSelection();
    });";
    echo "</script>";

    echo "</body>";
    echo "</html>";
}

