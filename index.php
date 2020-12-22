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
            <img class="postImg" src="<?php echo $newsPost['image']; ?>">
            <div>
                <h3> <?php echo $newsPost['title']; ?> </h3>
                <p> <?php echo $newsPost['published date'] . ", " . $newsPost['author']; ?> </p>
                <p> <?php echo $newsPost['content']; ?> </p>
            </div>
            </article>
            <?php endforeach; ?>
        </section>

    </main>
</body>
</html>
