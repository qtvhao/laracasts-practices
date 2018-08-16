<?php
define( "ABSPATH", dirname( __FILE__ ) );
define( "DS", DIRECTORY_SEPARATOR );
$database = require_once 'core/bootstrap.php';
$router   = new Router();
require_once 'routes.php';
$router = Router::load( 'routes.php' );
try {
	$controller = $router->direct( Request::uri(), Request::method() );
	require $controller;
} catch ( Exception $e ) {
	die( $e->getMessage() );
}
