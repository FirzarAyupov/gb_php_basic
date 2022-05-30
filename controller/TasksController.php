<?php
require_once "model/TaskProvider.php";
require_once 'model/User.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    echo 'Доступ запрещен!';
    die();
}
$taskProvider = new TaskProvider();

if ($username != null) {
    if(isset($_SESSION['task'])) {
        $taskProvider = $_SESSION['task'];
    }
    $_SESSION['task'] = $taskProvider;
    //print_r($_SESSION['task']);
}


if (isset($_GET['action']) && $_GET['action'] === 'addTask') {
    include "view/addTasks.php";
    die();
}

$tasks = $taskProvider->getUndoneList();



include "view/tasks.php";