<?php
/** @var Router $router */
$router->get(''              , 'controllers/index.php');
$router->get('about'         , 'controllers/about.php');
$router->get('about/culture' , 'controllers/about-culture.php');
$router->get('contact'       , 'controllers/contact.php');
$router->post('tasks/store'   , 'controllers/tasks-store.php');
