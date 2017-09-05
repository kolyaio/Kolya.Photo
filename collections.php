<?php

require_once "theme.php";

$title = "Kolya.Photo";
$header = <<<EOF
EOF;


$body = <<<EOF
    <div id="app"></div>
EOF;


$theme = new Theme($title, $header, $body);
