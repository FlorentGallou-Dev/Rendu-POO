<?php
    class ClioModel {
        const NOMBREPORTES = [3,5];
        const COULEURS = [
            "213800058" => "Bleu nuit",
            "023526548" => "Orange Valencia",
            "462513598" => "Bleu Céladon",
            "846521302" => "Brun Vison",
            "952354857" => "Bleu Iron",
            "316524985" => "Rouge Flamme",
            "258465812" => "Noir Etoilé",
            "136524877" => "Gris Platine"
        ];
        const PRIXNEUF = 23450;

        protected int $nombrePortes;
        protected int $couleur;

        public function setNombreportes(int $nbPortes) {
            if(in_array($nbPortes, self::NOMBREPORTES)) { //Appel de la constante self est l'équivalent de this mais pour une class et non une instance.
                $this->nombrePortes = $nbPortes;
            }
            else {
                throw new Exception("Warning unknown door number.");
            }
        }
        public function getNombreportes() {
            return $this->nombrePortes;
        }

        public function setColor(int $codeCouleur) {
            if(array_key_exists($codeCouleur, self::COULEURS)) { //Appel de la constante self est l'équivalent de this mais pour une class et non une instance.
                $this->couleur = $codeCouleur;
            }
            else {
                throw new Exception("Warning unknown color.");
            }
        }
        public function getColor() {
            return $this->couleur . " - " . self::COULEURS[$this->couleur];
        }

        public function getPrixNeuf() {
            return $this->PRIXNEUF;
        }

        public function showClioInfos() {
            return "<p>Cette Clio a le code couleur : " . $this->getColor() . " , a " . $this->getNombreportes() . " portes et coûte : " . self::PRIXNEUF . "</p>";
        }

        public function __construct(int $nbPortes, int $couleur) {
            $this->setNombreportes($nbPortes);
            $this->setColor($couleur);
        }
    }
?>