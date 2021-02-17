<?php

class Personal
{
    //properties, attributes, fields

    private $id;
    private $name = "";
    private $surname = "";

    //methods

    public function __construct($id, $name, $surname)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getInfos() {
        return "id: ". $this->id. "<br>" . $this->name ." ". $this->surname;
    }

    public function showInfos()
    {
        echo "<h3>Bilgiler</h3> <br>";
        echo "<b>ID:</b> $this->id <br>";
        echo "<b>İsim:</b> $this->name <br>";
        echo "<b>Soyisim:</b> $this->surname <br>";
    }
}

// We can use all the features in the personal class.
class SpecialPersonal extends Personal
{
    private $bio ;

    public function __construct($id, $name, $surname, $bio)
    {
        parent::__construct($id, $name, $surname);
        $this->bio = $bio;
    }

    public function getBio() {
        return $this->bio;
    }

    // Override
    public function showInfos()
    {
        parent::showInfos();
        echo "<b>Bio:</b> $this->bio <br>";
    }

}

$SpecialPer1 = new SpecialPersonal(1, "Ahmet", "Onar", "Bartın - Türkçe Öğretmenliği");
echo $SpecialPer1->showInfos();
