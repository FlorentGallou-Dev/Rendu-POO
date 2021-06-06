<?php
    class Book {
        protected string $title;
        protected int $pages;

        public function setTitle(string $title) {
            $this->title = $title;
        }
        public function getTitle():string {
            return $this->title;
        }

        public function setPages(int $pages) {
            $this->pages = $pages;
        }
        public function getPages():int {
            return $this->pages;
        }

        public function __construct(array $data) {
            $this->title = $data["title"];
            $this->pages = $data["pages"];
        }
    }