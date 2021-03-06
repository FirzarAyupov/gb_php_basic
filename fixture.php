<?php
require_once "model/User.php";
require_once "model/UserProvider.php";
require_once "model/Task.php";
require_once "model/TaskProvider.php";

$pdo = require 'db.php';

$pdo->exec('CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(150),
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  user_id INTEGER,
  description VARCHAR(150) NOT NULL,
  isDone TINYINT DEFAULT (0)
)');

$user = new User('admin');
$user->setName('Главный админ');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');
//
//$task = new Task('Задача 1');
//$taskProvider = new TaskProvider($pdo);
//$taskProvider->addTask($task);
