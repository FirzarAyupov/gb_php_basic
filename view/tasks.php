<h1>Задачи</h1>
<a href="?controller=tasks&action=addTask">Добавить задачу</a>
<ol>
<?php foreach ($tasks as $task):?>
    <li>
        <?=$task->getDescription()?>
        <a href="&action=markIsDone&id=<?=$task->getDescription()?>">[ВЫПОЛНЕНО]</a>
    </li>
<?php endforeach;?>
</ol>