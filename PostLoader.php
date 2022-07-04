<?php class PostLoader {
    private array $posts;
    
    public function __construct() {
        $this->posts = [];
    }

    public function getPosts() {
        return $this->posts;
    }

    public function setPost($post) {
        array_push($this->posts, $post);
    }

    public function getTitle(int $i){
        if (count($this->posts) !== 0){
            return $this->posts[$i]["title"];
        }
    }
    public function getBody(int $i){
        if (count($this->posts) !== 0){
            return $this->posts[$i]["body"];
        }
    }
    public function getAuthor(int $i){
        if (count($this->posts) !== 0){
            return $this->posts[$i]["author"];
        }
    }
    public function getDate(int $i){
        if (count($this->posts) !== 0){
            return $this->posts[$i]["date"];
        }
    }

    public function getAmountOfPostsStartpoint(){
        if (count($this->posts) > 20){
            return count($this->posts) - 21;
        } else {
            return - 1;
        }
    }
}