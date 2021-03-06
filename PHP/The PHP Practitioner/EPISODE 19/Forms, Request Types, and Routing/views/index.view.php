<?php require_once ABSPATH . '/views/partials/header.php';?>
<?php
/** @var Task[] $tasks */
?>
<header>Todo list</header>
<div>
    <form action="index.php?path=tasks/store" method="post">
        <input type="text" title="" name="name">
    </form>
</div>
<div>
    <ul>
		<?php foreach ( $tasks as $task ): ?>
			<?php if ( $task->isCompleted() ): ?>
                <li style="text-decoration: line-through"><?php echo $task->getDescription(); ?></li>
			<?php else: ?>
                <li style="text-decoration: none;"><?php echo $task->getDescription(); ?></li>
			<?php endif; ?>
		<?php endforeach; ?>
    </ul>
</div>
<?php require_once ABSPATH . '/views/partials/footer.php';?>
