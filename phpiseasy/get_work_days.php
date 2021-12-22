<?php

# Студент учится в московском университете. 
# 
# Учебой заняты все дни кроме вторника и воскресенья.
# 
# Необходмо написать функцию get_work_days($__start_date, $__end_date, $__holidays), 
# которая вернет массив его рабочих дней в виде 'dd.mm.YYYY l'
# 
# $__start_date и $__end_date задают промежутки времени которые необходимо рассмотреть
# 
# $__holidays - массив выходных в виде: 'dd.mm'.
print_r(get_work_days('07.03.2018', '10.04.2018', ['08.03', '09.03']));
function get_work_days($__start_date, $__end_date, $__holidays) 
{
    preg_match('/\.(\d+)\./ui', $__start_date, $month);
    preg_match('/^(\d+)\./ui', $__start_date, $day);
    preg_match('/\.(\d+)$/ui', $__start_date, $year);
    $now  = mktime(0, 0, 0, $month[1], $day[1], $year[1]);

    preg_match('/\.(\d+)\./ui', $__end_date, $month);
    preg_match('/^(\d+)\./ui', $__end_date, $day);
    preg_match('/\.(\d+)$/ui', $__end_date , $year);
    $stop = mktime(0, 0, 0, $month[1], $day[1], $year[1]);
    
    $result = array();
    for ($now; $now < $stop; $now += 86400) {
        if ( date("l", $now) != "Sunday" || date("l", $now) != "Tuesday" || in_array(date("d.m", $now), $__holidays) == false) {
            $result[] = date("d.m.Y l", $now);
        }
    }

    return $result;
}