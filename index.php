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
    echo "function copyContent(button) {
      var text = button.previousSibling.innerHTML;
      
      var tempInput = document.createElement(\"input\");
      tempInput.style.position = \"absolute\";
      tempInput.style.left = \"-9999px\";
      tempInput.value = text;
      
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand(\"copy\");
      document.body.removeChild(tempInput);
    }";
    echo "</script>";

    echo "</body>";
    echo "</html>";
}

