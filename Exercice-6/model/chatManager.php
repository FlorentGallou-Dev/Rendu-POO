<?php
    final class chatManager {
        private PDO $bdd;

        public function addCat(Cat $cat) {

            $query = $this->bdd->prepare(
                "INSERT INTO cat(name, age, sex, color)
                VALUES(:name, :age, :sex, :color)"
            );

            $query->execute([
                "name" => $cat->getName(),
                "age" => $cat->getAge(),
                "sex" => $cat->getSex(),
                "color" => $cat->getColor()
            ]);
        }
        public function getCats() {
            $response = $this->bdd->query("SELECT * FROM cat");
            
            $response->setFetchMode(PDO::FETCH_CLASS, 'Cat');

            $result = $response->fetchAll();
            var_dump($result);

            return $result;
        }

        public function __construct() {
            $this->bdd = new PDO('mysql:host=localhost;dbname=atelier_chats', 'root', '');
        }
    }
?>