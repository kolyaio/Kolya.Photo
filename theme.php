<?php
require_once "template.php";

class Theme  {
    private $title, $body, $header;

    public function __construct($title,$header, $body)
    {
        $this->title = $title;
        $this->header = $header;
        $this->body = $body;

        echo $this->executeTemp();
    }

    public function getTitle() {
        return $this->title;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getBody() {
        return $this->body;
    }


    private function executeTemp() {
        return getTemplate($this->title,$this->header, $this->body);
    }
}

