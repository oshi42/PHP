<?php

$coeff = '5x3x4x2';

preg_match_all('/(\w*?\d+)/ui', $coeff, $matches);

print_r($matches);
