<?php
include_once "baranagElektronik.php";
include_once "kipasAngin.php";
include_once "lampu.php";
include_once "saklar.php";

$lampu = new Lampu();
$saklarLampu = new Saklar($lampu);

$saklarLampu->nyalakan();
$saklarLampu->matikan();

$kipasAngin = new KipasAngin();
$saklarKipasAngin = new Saklar($kipasAngin);

$saklarKipasAngin->nyalakan();
$saklarKipasAngin->matikan();
