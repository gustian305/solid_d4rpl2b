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