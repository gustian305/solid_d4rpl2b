<?php
include_once "tipePembayaran.php";
include_once "pembayaranCustomer.php";

$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$pembayaranCustomer = new PembayaranCustomer();

$pembayaranCustomer->menerimaPembayaran($debit); 
$pembayaranCustomer->menerimaPembayaran($kredit);
$pembayaranCustomer->menerimaPembayaran($cash);