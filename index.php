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
                <!-- Raden nedan gör ingen skillnad nu-->
            <?php $a = $newsPost['published date']; ?>

            <img class="postImg" src="<?php $newsPost['image']; ?>">
            <div>
                <h3> <?php $newsPost['title']; ?> </h3>
                <p> <?php $newsPost['published date']; ?> </p>
                <p> <?php $newsPost['content']; ?> </p>
            </div>
            <?php endforeach; ?>
        </section>

    </main>
</body>
</html>
