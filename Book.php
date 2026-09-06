<?php
class Book
{
    private $title;
    private $author;
    private $status;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
        $this->status = "Tersedia";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getInfo()
    {
        return "Buku: {$this->title} (Oleh: {$this->author}) - Status: {$this->status}";
    }

    public function borrowBook()
    {
        if ($this->status == "Tersedia") {
            $this->status = "Dipinjam";
            return true;
        }
        return false;
    }
}
?>