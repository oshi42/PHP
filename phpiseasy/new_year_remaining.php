<?php

# Написать функцию new_year_remaining($__date), 
# возвращающую количество дней до нового года от заданной даты $__date в формате '22.11.2017'.
# 
# Если ввод неправильный - функция возвращает false.

function new_year_remaining($__date) {
    $dateArr = explode(".", $__date);
    $date    = mktime(0, 0, 0, $dateArr[1], $dateArr[0], $dateArr[2]);
    if ($date == false)
        return false;
    $nextY   = $dateArr[2] + 1;
    $date2   = mktime(0, 0, 0, 1, 1, $nextY);
    return floatval($date2 - $date)/(60*60*24)-1;    
}