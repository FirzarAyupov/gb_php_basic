<?php

$answer = "1709";
$variant1 = "1305";
$variant2 = "1424";
$variants = $variant1 . ", " . $variant2 . ", " . $answer . "\n";

$question = "В каком году произошла Полтавская битва? Варианты:\n" . $variants;

$win = "Поздравляем! Вы ответили верно";
$lose = "Вы ответили не верно";

while (!$out) {

    $input = readline($question);

    if ($input == $answer) {
        $out = $win;
    } elseif ($input == $variant1 || $input == $variant2) {
        $out = $lose;
    }
}

echo $out;
