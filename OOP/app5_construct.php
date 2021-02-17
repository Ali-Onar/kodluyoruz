<?php

class Personel
{
    //properties, attributes, fields

    private $id = 95;
    private $ad = "Ali Tunacan";
    private $Soyad = "Onar";

    //methods
    
    public function __construct($id, $ad, $soyad)
    {
        $this->id = $id;
        $this->ad = $ad;
        $this->soyad = $soyad;
    }

    public function showInfos() {
        echo "<h3>Bilgiler</h3> <br>";
        echo "<b>ID:</b> $this->id <br>";
        echo "<b>İsim:</b> $this->ad <br>";
        echo "<b>Soyisim:</b> $this->soyad <br>";
    }
}

$per1 = new Personel(1, "Furkan", "Koca");
$per2 = new Personel(2, "Serkan", "Kablan");    
echo $per1->showInfos();
echo $per2->showInfos();



