<?php

# Написать функцию when_blinday($__year), 
# возвращающую дату ближайшей масленницы (последнее воскресенье марта) в формате d-m-Y.
#
# Если $__year - год, введен некорректно, вернуть false.

function when_blinday($__year) {
    $stringData = 'last sunday of February '.$__year;
    if (strtotime($stringData)===false)
        return false;
    return date("Y-m-d", strtotime($stringData));
}