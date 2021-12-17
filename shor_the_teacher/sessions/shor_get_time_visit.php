<?php

# Запиши в сессию время захода пользователя на сайт.
#
# При обновлении страницы выводи сколько секунд назад пользователь зашел на сайт

session_start();
echo shor_get_time_visit();

function shor_get_time_visit() {
    if (! isset($_SESSION['first_visit']) ) {
        $_SESSION['first_visit'] = time();
    } else {
        return time() - $_SESSION['first_visit'];
    }
}
