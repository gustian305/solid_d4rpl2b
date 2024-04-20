<?php

class Saklar {
    private $item;

    public function __construct(BarangElektronik $item) {
    $this->item = $item;
    }

    public function nyalakan() {
    $this->item->operasi();
    }

    public function matikan() {
    $this->item->berhenti();
    }
}