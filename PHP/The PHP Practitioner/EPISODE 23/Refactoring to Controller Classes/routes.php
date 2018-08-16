<?php
/** @var Router $router */
$router->get( '', 'PagesController@home' );
$router->get( 'index.php', 'PagesController@home' );
$router->get( 'about', 'PagesController@about' );
$router->get( 'about/culture', 'PagesController@about_culture' );
$router->get( 'contact', 'PagesController@contact' );
$router->post( 'tasks/store', 'PagesController@tasks_store' );
