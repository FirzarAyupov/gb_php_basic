<?php

for ($i = 0; $i < 10; $i++) {
    $arr1[] = rand(0, 100);
    $arr2[] = rand(0, 100);
}
print_r($arr1);
print_r($arr2);

for ($i = 0; $i < 10; $i++) {
    print_r($arr1[$i] * $arr2[$i] . PHP_EOL);
}
