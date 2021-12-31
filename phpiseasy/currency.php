<?php

# Написать класс Currency, который представляет собой валюту Класс должен содержать:
# 
#     Конструктор __construct($whole, $fraction);
#     Метод set_whole($whole);
#     Метод set_fraction($fraction);
#     Метод get_whole();
#     Метод get_fraction();
#     Метод add($other_parameters), рассчитывающий сумму двух валют.;
#     Метод composition($times), рассчитывающий увеличение валюты в $times раз;
#     Свойство(private) $__whole (целая часть, например рубли доллары)
#     Свойство(private) $__fraction (копейки, центы, о есть дробная часть)
# 
# К свойствам можно обращаться только через методы. Все методы public. Важно! $other_parameters - массив с целой и дробной часть валюты объекта с которым складываем..

class Currency
{
    private $__whole, $__fraction;
    public function __construct($whole, $fraction) {$this->__whole = $whole; $this->__fraction = $fraction;}
    public function set_whole($whole) {$this->__whole = $whole;}
    public function set_fraction($fraction) {$this->__fraction = $fraction;}
    public function get_whole() {return $this->__whole;}
    public function get_fraction() {return $this->__fraction;}
    
    public function add($other_parameters) {
        $this->__fraction = ($other_parameters[1] + $this->__fraction)%100;
        $this->__whole = $other_parameters[0] + $this->__whole;
    }
    
    public function composition($times) {
		$this->__fraction = ($this->__fraction * $times)%100;
        $this->__whole    = ($this->__whole * $times) ;
    }
}