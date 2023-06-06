<?php

function encodeDescription($string) {
    $encodedString = str_replace(array("\r\n", "\r", "\n"), "\n", $string);

    return str_replace('"', '\"', $encodedString);
}