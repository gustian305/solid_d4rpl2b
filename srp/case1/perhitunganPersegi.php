<?php

class PenghitungPersegi{
    public function hitungLuas(Persegi $persegi): int {
        return $persegi->getSisi() * $persegi->getSisi();
    }
}