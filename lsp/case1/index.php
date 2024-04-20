<?php
include_once "socialMedia.php";
include_once "instagram.php";
include_once "whatsApp.php";

$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

$instagram = new Instagram();
$instagram->chat();
$instagram->publishPost();
$instagram->sendPhotosAndVideos();