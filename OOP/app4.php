<?php

class Personel
{
    private $ID = 95;
    private $Ad = "Ali Tunacan";
    private $Soyad = "Onar";

    public function getID()
    {
        return $this->ID;
    }

    public function getAd()
    {
        return $this->Ad;
    }

    public function getSoyad()
    {
        return $this->Soyad;
    }
}

$ogrenci1 = new Personel;

echo $ogrenci1->getID();
echo "<br>";
echo $ogrenci1->getAd();
echo "<br>";
echo $ogrenci1->getSoyad();