<?php

# PCRE. Написать функцию highlight_variables($__text), 
# которая заключает все переменные в php коде в тег ,
# учесть, что $variable['key'] - нужно заключить в теги полностью.

$text = 'текст $varVar, текст';
highlight_variables($text);

function highlight_variables($__text)
{
    return preg_replace('/(\$[\w\d\[\]\'\'\\"\\"]+)/uis', 
                         "<b>$1</b>", 
                         $__text);
}