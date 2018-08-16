<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/16/2018
 * Time: 4:48 PM
 */

class PagesController {
	public function home() {
		require_once ABSPATH . DS . 'Task.php';
		$database = App::get( 'database' );
		/** @var QueryBuilder $database */
		$tasks = $database->selectAll( 'tasks' );
		$tasks = array_map( function ( $task ) {
			$task1 = new Task( $task->description );
			$task1->setCompleted( ! ! $task->completed );

			return $task1;
		}, $tasks );

		return view( 'index', compact( 'tasks' ) );
	}

	public function about() {
		return view( 'about' );
	}

	public function about_culture() {
		$company = 'Laracasts';

		return view( 'about-culture', compact( 'company' ) );
	}

	public function contact() {
		return view( 'contact' );
	}

	public function tasks_store() {
		/** @var QueryBuilder $database */
		$database = App::get( 'database' );
		$database->insert( 'tasks', [
			'description' => $_POST['description'],
			'completed'   => false
		] );
		header( 'Location: index.php' );
	}
}
