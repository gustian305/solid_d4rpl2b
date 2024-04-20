<?php
include_once "dbms.php";
include_once "dbmsConnection.php";

$mySql = new MySql();
$mongoDB = new MongoDB();

$dbmsConnection = new DBMSConnection();

$dbmsConnection->connect($mySql);
$dbmsConnection->connect($mongoDB);