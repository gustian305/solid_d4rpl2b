<?php

interface KendaraanBBM {
    public function menggunakanBBM(): void;
}

class Mobil implements KendaraanBBM {
    public function menggunakanBBM(): void
    {
        echo "Mobil menggunakan BBM. <br>";
    }
}

interface KendaraanListrik {
    public function menggunakanBaterai(): void;
}

class MobilListrik {
    public function menggunakanBaterai() : void {
        echo "Mobil menggunakan Baterai.";
    }
}

$mobil = new Mobil();
$mobilListrik = new MobilListrik();

$mobil->menggunakanBBM();
$mobilListrik->menggunakanBaterai();

