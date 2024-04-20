<?php

class WhatsApp implements VidioGroupManager {
    public function chat(): void {
        echo "Mengirim pesan. <br>";
    }
    public function sendPhotosAndVideos() : void {
        echo "Mengirim foto dan vidio di WhatsApp. <br>";
    }
    public function callGroupVideo(): void
    {
        echo "Melakukan panggilan vidio di WhatsApp <br>";
    }
}
