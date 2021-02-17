<?php


class Urun {

  public $urunAdi = "";
  public $urunFiyat = 0.0;
  public $urunKDV = 0.0;

  public function __construct($uAdi, $uFiyat, $kdvOrani) {
    $this->urunAdi = $uAdi;
    $this->urunFiyat = $uFiyat;  // Özelliklere erişim 
    $this->urunKDV = $this->kdvHesapla($kdvOrani); // Metotlara erişim
  }

  protected function kdvHesapla($kdvOrani) {
    return $this->urunFiyat * ($kdvOrani / 100);
  }

}

$meyve = new Urun("Elma", 15.0, 18.0);
echo "Ürün Adı : ".$meyve->urunAdi . "<br />";
echo "Ürün Fiyatı : " . $meyve->urunFiyat . "<br />";
echo "Ürün KDV : " . $meyve->urunKDV . "<br />";

?>