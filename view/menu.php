<a href="/">Главная</a>
<?php if ($username !== null) : ?>
    <a href="/?controller=tasks">Задачи</a><br>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="?controller=security&action=logout">[Выход]</a></p>
<?php else : ?>

    <a href="/?controller=security">Войти</a>
    <a href="/?controller=signup">Регистрация</a>
<?php endif ?><br>