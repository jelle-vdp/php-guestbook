<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Guestbook</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>

        <h1 class="heading container">PHP Guestbook</h1>

        <main class="container">

            <form method="post"<?php if (count($postloader->getPosts()) > 0){echo " class='guestbook-present'";}?>>
                <input class="form__title" type="text" name="title" placeholder="Title">
                <input class="form__author" type="text" name="author" placeholder="Author">
                <textarea class="form__body" name="body" placeholder="Message"></textarea>
                <button type="submit" name="guestbook-submit">Submit</button>
            </form>

            <?php if (count($postloader->getPosts()) > 0): ?>
            <section class="guestbook">
            
                <?php for ($i = count($postloader->getPosts()) - 1; $i > $postloader->getAmountOfPostsStartpoint(); $i--): ?>
                    <article>
                        <h3><?= $postloader->getTitle($i) ?></h3>
                        <p class="article__info"><em>Written by <?= $postloader->getAuthor($i) ?> on <?= $postloader->getDate($i) ?></em></p>
                        <q class="article__body"><?= $postloader->getBody($i) ?></q>
                    </article>
                <?php endfor; ?>
            
            </section>
            <?php endif ?>
        </main>
    </body>
</html>

<?php
    // $_SESSION["postloader"] = $postloader;
    // session_destroy();
?>