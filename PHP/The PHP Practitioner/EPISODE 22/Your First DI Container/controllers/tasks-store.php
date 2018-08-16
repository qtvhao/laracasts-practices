<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/15/2018
 * Time: 10:59 PM
 */
/** @var QueryBuilder $database */
$database = App::get( 'database');
$database->insert('tasks', [
	'description'=>$_POST['description'],
	'completed'=>false
]);
header('Location: index.php');
