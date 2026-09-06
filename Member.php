<?php
class Member
{
    private $name;
    private $npm;

    public function __construct($name, $npm)
    {
        $this->name = $name;
        $this->npm = $npm;
    }

    public function getInfo()
    {
        return "Member: {$this->name} (NPM: {$this->npm})";
    }

    public function borrow(Book $book)
    {
        if ($book->borrowBook()) {
            return "✅ {$this->name} BERHASIL meminjam '{$book->getTitle()}'.";
        } else {
            return "❌ {$this->name} GAGAL meminjam '{$book->getTitle()}' (Sedang dipinjam).";
        }
    }
}
?>