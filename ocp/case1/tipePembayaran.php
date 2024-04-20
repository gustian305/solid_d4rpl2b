<?php

interface TipePembayaran 
{
    public function memprosesPembayaran();
}

class Debit implements TipePembayaran {
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran Debit... <br>";
    }
}

class Kredit implements TipePembayaran {
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran Kredit... <br>";
    }
}

class Cash implements TipePembayaran {
    public function memprosesPembayaran(): void
    {
        echo "Memproses pembayaran Tunai... <br>";
    }
}
