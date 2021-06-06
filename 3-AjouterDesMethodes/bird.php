<?php
    class Bird {
        public string $type;
        public string $color;
        public int $age;
        public array $areas = [];

        public function sing() {
            echo "<br>$this->type : Cui cui<br>";
        }

        public function fly(string $destination) {
            if($this->age > 4) {
                return  "The bird is flying to " . $destination;
            }
            return "The bird is too young to fly";
        }
    }
?>