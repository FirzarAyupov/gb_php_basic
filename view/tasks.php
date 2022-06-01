<h1><?= $pageHeader ?></h1>
<a href="/">Главная</a>
<?php if ($username !== null) : ?>
    <a href="?controller=security&action=logout">[Выход]</a></p>
<?php endif ?><br>
<form action="/?controller=tasks&action=add" method="post">
    <input type="text" name="task" placeholder="Опишите новую задачу">
    <input type="submit" value="Добавить">
</form>
<!--<a href="?controller=tasks&action=addTask">Добавить задачу</a>-->

<?php if (empty($tasks)): ?>
    <p>Задачи отсутствуют</p>
<?php else: ?>
    <ol>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?= $task->getDescription() ?>
                <a href="&action=markIsDone&id=<?= $task->getId() ?>">[ВЫПОЛНЕНО]</a>
            </li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>