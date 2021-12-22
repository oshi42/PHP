<?php

# Написать класс Polynomial, который представляет собой многочлен над полем указанной характеристики. Класс должен содержать:
#
#    Конструктор __construct($coeff, $charField);
#    Метод set_coeff($coeff);
#    Метод set_charField($charField);
#    Метод string_to_arr(), разбивает строку с коэффициентами в массив;
#    Метод get_coeff();
#    Метод get_charField();
#    Метод redution(), приводящий коэффициенты по модулю;
#    Метод add($parameters_other), рассчитывающий сумму двух полиномов. Результат сохраняется в объект вызываемого метода;
#    Метод composition($parameters_other), рассчитывающий проивзедение двух многочленов. Результат сохраняется в объект вызываемого метода;
#    Метод is_mirror_polynimial(), проверяет является ли данный многочлен зеркальным(т.е коэффициенты зеркальных номеров совпадают). Возвращает строку "true" или "false";
#    Свойство(private) $__coeff строка коэффициентов, первый коэффициент - свободный член.
#    Свойство(private) $__charField, характеристика поля
#
# К свойствам можно обращаться только через методы. Все методы public.

class Polynomial
{
    private $__coeff, $__charField;
    function __construct($coeff, $charField) {
        $this->__coeff     = $coeff;
        $this->__charField = $charField;
    }
    function set_coeff($coeff) {
        $this->__coeff = $coeff;
    }
    function set_charField($charField) {
        $this->__charField = $charField;
    }
    function string_to_arr() {
        preg_match_all('/(\w*?\d+)/ui', $this->__coeff, $matches);
        return $matches[0];
    }
    function redution(){

    }
}