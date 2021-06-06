<?php
class Cat
{
    const SEX = ["male", "femelle"];
    const COLOR = ["Noir", "Roux", "Blanc", "Tigré", "Bicolor"];

    protected int $id;
    protected string $name;
    protected int $age;
    protected string $sex;
    protected string $color;

    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        if (strlen($name) > 0 && strlen($name) <= 15) {
            $this->name = $name;
            return;
        }
        echo "Mauvaise valeur pour le nom";
    }
    public function getName()
    {
        if (isset($this->name)) {
            return $this->name;
        }
    }

    public function setAge(int $age)
    {
        if ($age > 0 && $age <= 30) {
            $this->age = $age;
            return;
        }
        echo "Mauvaise valeur pour l'age";
    }
    public function getAge()
    {
        if (isset($this->age) && $this->age !== 0) {
            return $this->age;
        }
    }

    public function setSex(string $sex)
    {
        if (in_array($sex, self::SEX)) {
            $this->sex = $sex;
            return;
        }
        echo "Mauvaise valeur le sexe";
    }
    public function getSex()
    {
        if (isset($this->sex)) {
            return $this->sex;
        }
    }

    public function setColor(string $color)
    {
        if (in_array($color, self::COLOR)) {
            $this->color = $color;
            return;
        }
        echo "Mauvaise valeur pour couleur, Choix entre : Noir, Roux, Blanc, Tigré et Bicolor";
    }
    public function getColor()
    {
        if (isset($this->color)) {
            return $this->color;
        }
    }

    public function __construct($data)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

    public function showCat()
    {
        if ($this->sex === "male") {
            $nomination = "un";
        } else {
            $nomination = "une";
        }
        return "<p>Le chat " . $this->name . " est " . $nomination . " " . $this->sex . " " . $this->color . " de " . $this->age . " ans.</p>";
    }
}
