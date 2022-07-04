<?php
    class Post {
        private $post;	
        
        public function __construct(string $title, string $body, string $author) {
            function sanatizeBadWords($input){
                $banned_words = array('shit', 'ass', 'fuck', 'retard', 'bitch', 'shit', 'shrimp', 'fat');
                return str_replace($banned_words, "*****", $input);
            }
            $this->post = ["title" => sanatizeBadWords(htmlspecialchars($title, ENT_SUBSTITUTE)), "body" => sanatizeBadWords(htmlspecialchars($body, ENT_SUBSTITUTE)), "author" => sanatizeBadWords(htmlspecialchars($author, ENT_SUBSTITUTE)), "date" => date("m/d/Y")];
        }

        public function getPost() {
            return $this->post;
        }
    }