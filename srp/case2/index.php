<?php

include_once "mahasiswa.php";
include_once "mahasiswaView.php";

$mahasiswa = new Mahasiswa('2205042', 'Gustian Prayoga Januar');
$mahasiswaView = new MahasiswaView();

$mahasiswaView->showMahasiswa($mahasiswa);