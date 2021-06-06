<?php
    class City {
        protected string $nom;
        protected string $departement;

        public function setNom(string $nom) {
            $this->nom = $nom;
        }
        public function getNom():string {
            return $this->nom;
        }

        public function setDepartement(string $departement) {
            $this->departement = $departement;
        }
        public function getDepartement():string {
            return $this->departement;
        }

        public function showLocation() {
            return " la ville " . $this->nom . " est dans le département " . $this->departement;
        }

        public function __construct(array $data)
        {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists( $this, $setter)) {
                    $this->$setter($value);
                }
            }
            echo "Objet créé";
        }
    }