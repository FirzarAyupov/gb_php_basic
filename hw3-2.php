<?php

$wishes = ["здоровья", "удачи", "любви", "везения", "мира", "добра", "улыбок", "благополучия", "счастья", "радости", "гармонии", "впечатлений", "успехов", "друзей", "спокойствия ", "настроения", "достатка"];

$epithets = ["космического", "бесконечного", "безудержного", "сильного", "безумного", "хорошего", "лучшего", "крепкого"];

$wishes_keys = array_rand($wishes, 3);
$epithets_keys = array_rand($epithets, 3);

$phrase = [];

for ($i = 0; $i < 3; $i++) {
    $phrase[] = $epithets[$epithets_keys[$i]] . " " . $wishes[$wishes_keys[$i]];
}

$name = readline("Введите имя имениника");

$string = "Дорогой, $name от всего сердца поздравляю тебя с днем рождения, желаю " . implode($phrase, ", ") . "!";

echo $string;