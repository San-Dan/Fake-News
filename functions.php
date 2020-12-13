<?php
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

declare(strict_types=1);
require __DIR__ . ('/data.php');


//function ($a, $b) {
//    return $b["published date"] <=> $a["published date"];
//});
//return $sortDate;

function sortDate($date)
{

}

usort
($newsPosts, 'sortDate')
