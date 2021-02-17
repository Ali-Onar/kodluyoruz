<?php

class Ogrenci
{
    private $ogrenciID = 0;
    public $ogrenciAd = "";
    public $ogrenciSoyad = "";
    protected $ogrenciBolum = "";
    private $dersler = array();
    public $durum = "";

    public function __construct($oAdi, $oSoyadi, $oBolum)
    {
        $this->ogrenciAdi = $oAdi;
        $this->ogrenciSoyadi = $oSoyadi;
        $this->ogrenciBolum = $oBolum;
    }

    public function dersEkle($dersAdi)
    {
        $this->dersler[] = $dersAdi;
        $this->dersCalis($dersAdi);
    }

    private function dersCalis($dersAdi)
    {
        $this->durum = $dersAdi . "çalışıyor";
    }

    public function ogrenciBilgileri()
    {
        return $this->ogrenciAdi." - ". $this->ogrenciSoyadi." - ". $this->ogrenciBolum;
    }
}


$ogrenci1 = new Ogrenci("Ali", "Onar", "Bilgisayar Müh");
echo $ogrenci1->ogrenciBilgileri();









/*
class Kedi
{
    public $kediRengi = "";
    private $kediBoyu = "";
    protected $kediGozRengi = "";
}
*/