<?php

require_once "theme.php";

$title = "Kolya.Photo";
$header = <<<EOF
EOF;


$body = <<<EOF
    <div class="jumbotron jumbotron-fluid parallax" id="banner">
        <div class="d-block p-4 bg-info messagebox">
            <h1 class="display-4 text-light text-center">Ready to watch my photos?</h1>
            <div class="my-1 text-light text-center"">Go to find out more of photos...</div>
            <p class="lead text-center">
                <a href="collections.php" class="btn  btn-lg btn btn-outline-light lg">Go now!</a>
            </p>
            <div id="app"></div>
        </div>
    </div>
EOF;


$theme = new Theme($title, $header, $body);
