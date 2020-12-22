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
    <!--link rel="stylesheet" href="/styling/flex.css"-->
    <!--link rel="stylesheet" href="/styling/grid.css"-->
    <title>FASHÖÖN</title>
</head>

<body>
    <header>
        <h1>FASHÖÖN</h1>
    </header>

    <main>
        <section class="flex-container">
            <?php foreach ($newsPosts as $newsPost) : ?>
        <article>
            <img src="<?php echo $newsPost['image']; ?>" alt="<?php echo $newsPost['alt text']; ?>">
            <div class="postText">
                <h3 class="heading"> <?php echo $newsPost['title']; ?> </h3>
                <p class="dateAuthor"> <?php echo $newsPost['published date'] . ", " . $newsPost['author']; ?> </p>
                <p class="content"> <?php echo $newsPost['content']; ?> </p>
                <p class="likeNum"> <?php echo $newsPost['likecounter']; ?> </p>
            </div>
            </article>
            <?php endforeach; ?>
        </section>

    </main>
</body>
</html>
