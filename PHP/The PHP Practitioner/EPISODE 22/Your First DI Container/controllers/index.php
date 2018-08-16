<?php
require_once ABSPATH . DS . 'Task.php';
$database = App::get( 'database');
/** @var QueryBuilder $database */
$tasks = $database->selectAll( 'tasks' );
$tasks = array_map( function ( $task ) {
	$task1 = new Task( $task->description );
	$task1->setCompleted( ! ! $task->completed );

	return $task1;
}, $tasks );
require_once ABSPATH . DS . 'views' . DS . 'index.view.php';
?>

