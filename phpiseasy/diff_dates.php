<?php

# Написать функцию diff_dates($__left, $__right), 
# которая находит абсолютное расстояние между двумя датами $__left и $__right. 
# 
# Даты представлены в формате timestamp. 
# 
# Функция возвращает строку вида: '$days." d ".$hours." h";', 
# где $days - разница в полных днях,
# $hours - разница в полных часах.

function diff_dates($__left, $__right) {
	$between = abs($__left - $__right);
    $days  = intval($between / (60*60*24));
    $hours = intval(($between - $days*60*60*24) /(60*60));
    return $days." d ".$hours." h";
    
}