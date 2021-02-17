<?php

include "includes/calc.inc.php";

$sayi1 = $_POST['sayi1'];
$sayi2 = $_POST['sayi2'];
$islem = $_POST['islem'];

$hesapYap = new hesapMakinası($sayi1, $sayi2, $islem);
echo $hesapYap->hesapMetodu();