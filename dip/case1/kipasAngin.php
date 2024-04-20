<?php

class KipasAngin implements BarangElektronik {
    private $keaktifan = false;

    public function operasi() {
    if (!$this->keaktifan) {
        echo "Kipas angin dinyalakan <br>";
        $this->keaktifan = true;
    } else {
        echo "Kipas angin sudah menyala <br>";
    }
    }

    public function berhenti() {
    if ($this->keaktifan) {
        echo "Kipas angin dimatikan <br>";
        $this->keaktifan = false;
    } else {
        echo "Kipas angin sudah mati <br>";
    }
    }
}