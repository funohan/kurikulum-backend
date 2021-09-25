<?php
include('ayam.php');
include('kucing.php');

function __autoload($class){
    require_once($class.".php");
}

$ayam = new Ayam;
$kucing = new Kucing;

?>
