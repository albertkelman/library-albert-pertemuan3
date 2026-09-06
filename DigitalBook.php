<?php
require_once 'Book.php';

class DigitalBook extends Book
{
    private $format;

    public function __construct($title, $author, $format)
    {
        parent::__construct($title, $author);
        $this->format = $format;
    }

    public function getInfo()
    {
        return parent::getInfo() . " | Format: {$this->format}";
    }
}
?>