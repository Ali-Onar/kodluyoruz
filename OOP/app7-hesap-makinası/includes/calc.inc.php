<?php

class hesapMakinası
{
    public $sayi1;
    public $sayi2;
    public $islem;

    public function __construct($sayi1, $sayi2, $islem)
    {
        $this->sayi1 = $sayi1;
        $this->sayi2 = $sayi2;
        $this->islem = $islem;
    }

    public function hesapMetodu()
    {
        switch ($this->islem) {
            case 'topla':
                $sonuc = $this->sayi1 + $this->sayi2;
                break;
            case 'cikar':
                $sonuc = $this->sayi1 - $this->sayi2;
                break;
            case 'carp':
                $sonuc = $this->sayi1 * $this->sayi2;
                break;
            case 'bol':
                $sonuc = $this->sayi1 / $this->sayi2;
                break;

            default:
                $sonuc = "Hata";
                break;
        }
        return $sonuc;
    }
}
