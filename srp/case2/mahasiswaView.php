<?php

class MahasiswaView {
    public function showMahasiswa( Mahasiswa $mahasiswa): void 
    {
        echo "NIM   : {$mahasiswa->getNim()}\n";
        echo "<br>";
        echo "Nama  : {$mahasiswa->getNama()}\n";
    }
}