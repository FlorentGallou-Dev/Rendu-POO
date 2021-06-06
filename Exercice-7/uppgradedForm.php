<?php
    require "form.php";

    class uppgradedForm extends Form {

        protected string $radio;
        protected string $checkBox;

        public function setRadio(string $radio) {
            $this->radio = $radio;
        }
        public function getRadio(){
            return $this->radio;
            echo "<p>getradio done</p>";
        }

        public function setCheckBox(string $checkBox) {
            $this->checkBox = $checkBox;
        }
        public function getCheckBox(){
            return $this->checkBox;
            echo "<p>getcheckBox done</p>";
        }

        public function __construct(array $data) {
            parent::__construct($data);
            $this->radio = $data["radio"];
            $this->checkBox = $data["checkBox"];
        }
    }

?>