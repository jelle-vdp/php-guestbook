<?php
    declare(strict_types=1);

    require 'Post.php';
    require 'Postloader.php';

    session_start();


    if (!isset($_SESSION["postloader"])){
        $postloader = new Postloader();
        $_SESSION["postloader"] = $postloader;
    } else {
        $postloader = $_SESSION["postloader"];
    }

    if (isset($_POST["guestbook-submit"])){
        $post = new Post($_POST['title'], $_POST['body'], $_POST['author']);
        $postloader->setPost($post->getPost());
        $_SESSION["postloader"] = $postloader;
        $_SESSION["post"] = $post;
        header('Location:' . $_SERVER['PHP_SELF']);
    }

    // function whatIsHappening() {
    //     echo '<h2>$_GET</h2>';
    //     var_dump($_GET);
    //     echo '<h2>$_POST</h2>';
    //     var_dump($_POST);
    //     echo '<h2>$_COOKIE</h2>';
    //     var_dump($_COOKIE);
    //     echo '<h2>$_SESSION</h2>';
    //     var_dump($_SESSION);
    // };

    // whatIsHappening();
    
    require("guestbook-view.php");