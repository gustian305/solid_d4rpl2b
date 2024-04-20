<?php

class PembayaranCustomer {
    private $tipe;
    public function menerimaPembayaran(TipePembayaran $tipe): void {
        $this->tipe = $tipe;
        $this->tipe->memprosesPembayaran();
    }
}