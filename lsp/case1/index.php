<?php

interface SosialMedia {
    public function chat():void;
    public function sendPhotosAndVideos(): void;
}

interface VidioGroupManager {
    public function callGroupVideo() : void;
}

interface PostMediaManager {
    public function publishPost() : void;
}

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

$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();