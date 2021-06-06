<?php

    class Person {
        protected string $lastName;
        protected string $firstName;
        protected string $adress;

        public function setLastName(string $lastName){
            $this->lastName = $lastName;
        }
        public function getLastName():string {
            return $this->lastName;
        }

        public function setFirstName(string $firstName){
            $this->firstName = $firstName;
        }
        public function getFisrtName():string {
            return $this->firstName;
        }

        public function setAdress(string $adress){
            $this->adress = $adress;
        }
        public function getAdress():string {
            return $this->adress;
        }

        public function getCoord():string {
            return $this->getFisrtName() . " " . $this->getLastName() . " habite au " . $this->getAdress() . ".";
        }

        public function __construct(array $data) {
            foreach($data as $key => $value){
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)){
                    $this->$setter($value);
                }
            }
            echo "<p>Instance done</p>";
        }
    }