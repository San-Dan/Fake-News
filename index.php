<?php

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styling/style.css">
    <title>FASHÖÖN</title>
</head>

<body>
    <header>
        <h1>FASHÖÖN</h1>
        <nav>
            <a href="x">HOME</a>
            <a href="x">About</a>
            <a href="x">Contact</a>
        </nav>
    </header>

    <main>
        <section class="flex-container">
            <?php $newsPosts = sortByDate($newsPosts);
            foreach ($newsPosts as $newsPost) : ?>
        <article>
            <img class="postImg" src="<?php echo $newsPost['image']; ?>" alt="<?php echo $newsPost['alt text']; ?>">
            <div class="postText">
                <h3 class="heading"> <?php echo $newsPost['title']; ?> </h3>
                <p class="dateAuthor"> <?php echo $newsPost['published date'] . ", " . $newsPost['author']; ?> </p>
                <p class="content"> <?php echo $newsPost['content']; ?> </p>
                <p class="likeNum"> <img src="images\heart-icon.png" class="heart"> <?php echo $newsPost['likecounter']; ?> </p>
            </div>
            </article>
            <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <h3>Stay up to date with us on social media</h3>
        <nav >
            <a href="x">FACEBOOK</a>
            <a href="x">INSTAGRAM</a>
            <a href="x">LOOKBOOK</a>
            <a href="x">PINTEREST</a>
        </nav>
    </footer>
</body>
</html>
