<?php

# Написать функцию booking($__date, $__rooms), 
# которая осуществляет бронирование комнаты в отеле.
# 
# $__date представляет собой пару дат вида '20.12.2018 - 26.12.2018', 
# 
# $__rooms - массив вида ['номер комнаты' => '13.02.2018 - 16.02.2018', ...], 
# который содержит даты, когда комната свободна.
# 
# Функция возвращает номер комнаты, 
# если искомая имеется или false в случае некорректного формата времени.

$__twoDates = '03.01.2018 - 05.01.2018';
print_r(unpack_date($__twoDates));


function unpack_date($__twoDates)
{
    preg_match('/(.+) - (.+)/', $__twoDates, $matches);
    return [ strtotime($matches[1]) , strtotime($matches[2]) ];
}

function booking($__rooms, $__date)
{
    $dateArr = unpack_date($__date);
    $dateStart = $dateArr[0];
    $dateStop  = $dateArr[1];
    if ($dateStart == false || $dateStop == false) {
        return false;
    }
    foreach ($__rooms as $room => $roomDate) {
        $dateArr = unpack_date($roomDate);
        $d1 = $dateArr[0];
        $d2 = $dateArr[1];

        if ($d1<=$dateStart && $d2>=$dateStop) {
            return $room;
        }

    }
    return false;
}