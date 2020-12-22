<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

function sortDate(array $newsPosts): array
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
