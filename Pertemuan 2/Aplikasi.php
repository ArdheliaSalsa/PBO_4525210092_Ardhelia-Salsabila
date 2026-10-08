<?php

require_once 'Mahasiswa.php';

// // Menggunakan constructor tanpa parameter
// $mhs1 = new Mahasiswa();
// $mhs1->tampilkanInfo();
//
// echo PHP_EOL;
//
// // Menggunakan constructor dengan 2 parameter
// $mhs2 = new Mahasiswa("Budi", "12345678");
// $mhs2->setUmur(20); // Mengatur umur menggunakan setter
// $mhs2->tampilkanInfo();
//
// echo PHP_EOL;
//
// // Menggunakan constructor dengan 3 parameter
// $mhs3 = new Mahasiswa("Siti", "87654321", 22);
// $mhs3->tampilkanInfo();

$liaa = new Mahasiswa();
$liaa->tampilkanInfo();

// memberikan value Ardhelia Sallsabila Al-Bahri ke property nama dari objek liaa
$liaa->setNama("Ardhelia Sallsabila Al-Bahri");
echo "Nama : " . $liaa->getNama() . PHP_EOL;

$liaa->setNim("4525210092");
echo "NIM : " . $liaa->getNim() . PHP_EOL;

$liaa->setUmur(19);
echo "Umur : " . $liaa->getUmur() . PHP_EOL;

// Constructor lengkap
$adnan = new Mahasiswa("Muhammad Adnan Hafidz", "4525210095", 19);
$adnan->tampilkanInfo();