
<?php
    class Student
    {
        protected string $name;
        protected int $age;

        public function setName(string $name) {
            try {
                if(strlen($name) > 2){
                    $this->name = $name;
                }
            } catch (\Exception $e) {
                echo "Exception de nom reçue : " .  var_dump($e->getMessage()) . "\n";
            }
        }

        public function setAge(int $age) {
            try {
                if($age > 16 && $age < 70){
                    $this->age = $age;
                }
            } catch (\Exception $e) {
                echo "Exception d\'age reçue : " .  var_dump($e->getMessage()) . "\n";
            }
        }
    }