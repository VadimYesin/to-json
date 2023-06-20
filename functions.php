<?php

function encodeDescription($string) {
    $encodedString = str_replace(array("\r\n", "\r", "\n"), "<br>", $string);

    return htmlspecialchars($encodedString, ENT_QUOTES);
}