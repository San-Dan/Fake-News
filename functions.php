<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

function sortByDate($newsPosts){
    $postDate = array_column($newsPosts, "published date");
    array_multisort($postDate, SORT_DESC, $newsPosts);
    // die(var_dump($postDate));
    // die(var_dump($posts));
    return $newsPosts;

}

/*function sortByDate(array $element1, array $element2): int
{
    $datetime1 = strtotime($element1['published date']);
    $datetime2 = strtotime($element2['published date']);
    return $datetime2 - $datetime1;
}

/*function sortByDate(array $newsPosts) : array {
    array_multisort($newsPosts, SORT_DESC);
    return $newsPosts;
}



/*function sortDate(array $newsPosts): array
{
    usort($newsPosts, function ($a, $b) {
        return $a['published date'] <=> $b['published date'];
    });
    return $newsPosts;
}

/*
<=> definition: Returns an integer less than, equal to,
or greater than zero, depending on if $x is less than, equal to,
or greater than $y.
