<?php

$userName = readline("Как Вас зовут\n");

do {
    $tasksCount = (int)readline("Сколько задач запланировано на сегодня?\n");
} while ($tasksCount <= 0);

$tasks = "";
$tasksTimeSum = 0;

for ($i = 1; $i <= $tasksCount; $i++) {
    $taskName = readline("Задача №$i:\n");
    $taskTime = (int)readline("Сколько примерно времени эта задача займет?\n"); //TODO нужна проверка на число > 0, отдельная функция на ввод?

    $tasks .= "$i $taskName ({$taskTime}ч)\n";
    $tasksTimeSum += $taskTime;
}

echo "$userName, сегодня у вас запланировано $tasksCount приоритетных задачи на день:\n";
echo $tasks;
echo "Примерное время выполнения плана = {$tasksTimeSum}ч";
