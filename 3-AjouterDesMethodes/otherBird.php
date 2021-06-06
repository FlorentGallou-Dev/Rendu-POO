<?php
    class otherBird {
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

        public function __construct(string $type, string $color, int $age, array $destinations) {
            $this->type = $type;
            $this->color = $color;
            $this->age = $age;
            array_push($this->areas, $destinations);
        }
    }
?>