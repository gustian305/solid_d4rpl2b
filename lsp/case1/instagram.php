<?php

class Instagram implements PostMediaManager {
    public function chat() : void {
        echo "Mengirim Pesan (DM) di Instagram. <br>";
    }
    public function publishPost(): void
    {
        echo "Menguggah foto atau vidio ke Indtagram. <br>";
    }
    public function sendPhotosAndVideos() : void {
        echo "Mengirim foto dan vidio.";
    }
}
