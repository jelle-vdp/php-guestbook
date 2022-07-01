<?php
    class Post {
        private $post;	
        
        public function __construct(string $title, string $body, string $author) {
            $this->post = ["title" => $title, "body" => $body, "author" => $author, "date" => date("m/d/Y")];
        }
        
        public function getPost() {
            return $this->post;
        }
    }