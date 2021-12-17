<?php

# Написать функцию get_words_repeated_letters($__text, $__count),
# которая будет в тексте $__text находить слова,  
# в которых как минимум $__count одинаковых букв.
# 
# Функция возвращает массив со словами.
#

# $text  = 'В мире множество длинных людей. Длина абстрактна. Длинношеее - это кто?';
# $count = 3;

# print_r(get_words_repeated_letters($text, $count));

function get_words_repeated_letters($__text, $__count) {
    // Разделим текст на слова
    preg_match_all('/\w+\b/ui', $__text, $matches);
    $resArr = array();

    // Пройдемся по каждому слову
    foreach($matches[0] as $word) {

        // Разобьем слово на массив
        $lettersArr = mb_str_split($word);

        // Пройдем по каждой букве слова
        foreach ($lettersArr as $letter) { 
            
            // Посчитаем количество букв $letter в слове и занесем в массив
            if (preg_match_all("/".$letter."/ui", $word) >= $__count) {
                $resArr[] = $word;
                continue;
            }
        }
    }

    return $resArr;
}