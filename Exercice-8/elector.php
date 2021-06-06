<?php
    require "client.php";

    class Elector extends Client{

        protected string $desk;
        protected bool $vote;

        public function aVoter(bool $vote) {
            if($this->vote) {
                return "La personne a déja voté, on ne peut voter qu'une fois.";
            }
            $this->vote = $vote;
            return "A voté !";
        }
    }