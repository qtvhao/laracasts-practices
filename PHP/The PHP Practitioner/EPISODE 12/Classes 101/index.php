<?php
require_once 'Task.php';

/** @var Task[] $tasks */
$tasks = [
	new Task( 'Go to the store' ),
	new Task( 'Finish my screencast' ),
	new Task( 'Clean my room' )
];
$tasks[0]->complete();
require_once 'index.view.php';
