<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

function sortDate(array $newsPosts): array
{
    usort($newsPosts, function ($a, $b) {
        return $b['published date'] <=> $a['published date'];
    });
    return $newsPosts;
}


/*function ($a, $b) {
    return $b['published date'] <=> $a['published date'];
});
return $sortDate;

<=> definition: Returns an integer less than, equal to,
or greater than zero, depending on if $x is less than, equal to,
or greater than $y.
