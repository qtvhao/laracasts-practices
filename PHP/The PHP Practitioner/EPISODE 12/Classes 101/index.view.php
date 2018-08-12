<?php
/** @var Task[] $tasks */
?>
<!doctype html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<header>Todo list</header>
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
</body>
</html>
