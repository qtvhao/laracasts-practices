<?php
require_once 'App.php';
require_once 'Router.php';
require_once 'Request.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';

App::bind( 'config', require_once ABSPATH . DS . "config.php" );
App::bind( 'database', new QueryBuilder(
	Connection::make( App::get('config')['database'] )
) );
