<?php
$query = require_once 'bootstrap.php';
$tasks = $query->selectAll( 'tasks' );
$tasks = array_map( function ( $task ) {
	$task1 = new Task( $task->description );
	$task1->setCompleted( ! ! $task->completed );

	return $task1;
}, $tasks );
require_once 'index.view.php'
?>

