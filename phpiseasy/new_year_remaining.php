<?php
new_year_remaining("11.11.2011");
function new_year_remaining($__date) {
    $dateArr = explode(".", $__date);
    $date    = mktime(0, 0, 0, $dateArr[1], $dateArr[0], $dateArr[2]);
    $nextY   = $dateArr[2] + 1;
    $date2   = mktime(0, 0, 0, 1, 1, $nextY);
    return ($date2 - $date)/(60*60*24);    
}