<?php

class Lampu implements BarangElektronik {
    private $keaktifan = false;

    public function operasi() {
    if (!$this->keaktifan) {
        echo "Lampu dinyalakan <br>";
        $this->keaktifan = true;
    } else {
        echo "Lampu sudah menyala <br>";
    }
    }

    public function berhenti() {
    if ($this->keaktifan) {
        echo "Lampu dimatikan <br>";
        $this->keaktifan = false;
    } else {
        echo "Lampu sudah mati <br>";
    }
    }
}