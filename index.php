<?php
require_once 'Book.php';
require_once 'Member.php';
require_once 'DigitalBook.php';

// Buat object Buku
$book1 = new Book("Project Hail Mary", "Andy Weir");
$book2 = new Book("Circe", "Madeline Miller");
$book3 = new Book("I'm Glad My Mom Died", "Jennette McCurdy");

// Buat object Member
$member1 = new Member("Albert Kelman Sitorus", "2410631250038");
$member2 = new Member("Kacey Musgraves", "2410631250039");
$member3 = new Member("Cynthia Erivo", "2410631250040");

// Tampilkan Daftar Buku
echo "--- Daftar Buku ---\n";
echo $book1->getInfo() . "\n";
echo $book2->getInfo() . "\n";
echo $book3->getInfo() . "\n";

// Tampilkan Daftar Member
echo "\n--- Daftar Member ---\n";
echo $member1->getInfo() . "\n";
echo $member2->getInfo() . "\n";
echo $member3->getInfo() . "\n";

// Simulasi Peminjaman
echo "\n--- Proses Peminjaman ---\n";
echo $member1->borrow($book1) . "\n";
echo $member2->borrow($book1) . "\n";
echo $member3->borrow($book2) . "\n";

// Status Terbaru
echo "\n--- Status Buku Terbaru ---\n";
echo $book1->getInfo() . "\n";
echo $book2->getInfo() . "\n";
echo $book3->getInfo() . "\n";

// Buku Digital
echo "\n--- Buku Digital ---\n";
$ebook = new DigitalBook("Laravel Dasar", "Matt Stauffer", "PDF");
echo $ebook->getInfo() . "\n";
?>