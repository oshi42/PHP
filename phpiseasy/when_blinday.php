<?php

# Написать функцию when_blinday($__year), 
# возвращающую дату ближайшей масленницы (последнее воскресенье марта) в формате d-m-Y.

# Если $__year - год, введен некорректно, вернуть false.


function when_blinday($__year) {
    $stringData = 'last sunday of March '.$__year;
    return date("d-m-Y", strtotime($stringData));
}