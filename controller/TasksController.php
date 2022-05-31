<?php
require_once "model/TaskProvider.php";
require_once "model/Task.php";
require_once 'model/User.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("Location: /");
    die();
}
$taskProvider = new TaskProvider();

if (isset($_GET['action']) && $_GET['action'] === 'add') {
    $taskProvider->addTask(new Task($_POST['task']));
    header("Location: /?controller=tasks");
    die();
}

$pageHeader = "Задачи";

$tasks = $taskProvider->getUndoneList();

include "view/tasks.php";