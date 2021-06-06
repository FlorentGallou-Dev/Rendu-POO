<?php

    class Form {

        protected string $action;
        protected string $method;
        protected string $text;
        protected string $submit;

        public function setAction(string $action) {
            $this->action = $action;
        }
        public function getAction(){
            return $this->action;
            echo "<p>getaction done</p>";
        }

        public function setMethod(string $method) {
            $this->method = $method;
        }
        public function getMethod(){
            return $this->method;
            echo "<p>getmethode done</p>";
        }

        public function setText(array $textList) {
            $chaineText = "";
            foreach($textList as $key => $value){
                $chaineText .= "<input type='" . $value . "' name='" . $key . "'>";
            }
            $this->text = $chaineText;
        }
        public function getText(){
            return $this->text;
            echo "<p>gettext done</p>";
        }

        public function setSubmit(string $submit){
            $this->submit = $submit;
        }
        public function getSubmit(){
            return $this->submit;
            echo "<p>getsubmit done</p>";
        }

        public function showForm(){
            return "<form action='" . $this->getAction() . "' method='" . $this->getMethod() ."' >" . $this->getText() . $this->getSubmit() . "</form>";
        }

        public function __construct(array $data){
            foreach($data as $key => $value){
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)){
                    $this->$setter($value);
                }
            }
        }
    }
?>