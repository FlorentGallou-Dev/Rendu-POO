<?php
    require "personne.php";

    class Client extends Personne{

        protected string $adress;

        public function getCoord() {
            return $this->nom . " " . $this->prenom . " habite au " . $this->adress;
        }
    }