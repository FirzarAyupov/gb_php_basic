<?php

require_once "Task.php";
require_once  "Comment.php";
require_once  "User.php";
require_once  "TaskService.php";
/*
1. Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка.
Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool)
 и обязательное user (User). В качества класса пользователя воспользуйтесь разработанным на уроке.
Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).
При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone,
помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.

2. Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User),
task (Task) и text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text),
добавляющий к задаче комментарий пользователя. Отношение между классами задачи и
комментария должны быть построены по типу ассоциация, поэтому необходимо добавить соответствующее свойство и методы классу Task.
*/
$user1 = new User("Вася");
$task1 = new Task("выполнить ДЗ", 1, $user1);
TaskService::addComment($user1, $task1, "тестовый коммент");

//print_r($task1);
//print_r($task1->getDateCreated());
//var_dump($task1->getDateUpdate());
//var_dump($task1->getDateDone());
//print_r($task1->getPriority());
//var_dump($task1->isDone());
//var_dump($task1->getComments());

