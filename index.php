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

    echo "<html>";
    echo "<head>";
    echo "<title>Сторінка з виведенням даних</title>";
    echo "</head>";
    echo "<body>";

    echo "<h2>Заголовки та описи:</h2>";

    for ($i = 0; $i < count($titles); $i++) {
        echo "<p>";
        echo "<strong>Заголовок:</strong> " . $titles[$i] . "<br>";
        echo "<strong>Опис:</strong> " . $descriptions[$i] . "<br>";
        echo "<button onclick=\"copyContent(this)\">Скопіювати контент</button>";
        echo "</p>";
    }

    echo "<script>";
    echo "function copyContent(button) {";
    echo "    var text = button.previousSibling.innerHTML;";
    echo "    navigator.clipboard.writeText(text);";
    echo "    alert('Контент скопійовано!');";
    echo "}";
    echo "</script>";

    echo "</body>";
    echo "</html>";
}