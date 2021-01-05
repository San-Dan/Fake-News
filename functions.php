<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

function sortByDate($newsPosts){
    $postDate = array_column($newsPosts, "published date");
    array_multisort($postDate, SORT_DESC, $newsPosts);
    return $newsPosts;

}
