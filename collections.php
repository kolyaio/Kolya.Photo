<?php

require_once "theme.php";

$title = "Kolya.Photo";
$header = <<<EOF
EOF;


$body = <<<EOF
    <h1>Hello World</h1>
    <div id="app">
    </div>
EOF;


$theme = new Theme($title, $header, $body);
