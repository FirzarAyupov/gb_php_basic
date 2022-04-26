<?php
$userName = readline("Как Вас зовут\n");
$task1 = readline("Какая задача стоит перед вами сегодня?\n");
$task1Time = readline("Сколько примерно времени эта задача займет?\n");

$task2 = readline("Какая задача стоит перед вами сегодня?\n");
$task2Time = readline("Сколько примерно времени эта задача займет?\n");

$task3 = readline("Какая задача стоит перед вами сегодня?\n");
$task3Time = readline("Сколько примерно времени эта задача займет?\n");

$tasksTimeSum = $task1Time + $task2Time + $task3Time;

echo "$userName, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$task1Time}ч)
- $task2 ({$task2Time}ч)
- $task3 ({$task3Time}ч)
Примерное время выполнения плана = {$tasksTimeSum}ч";
