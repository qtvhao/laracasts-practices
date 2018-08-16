<?php

class Router {
	protected $routes = [
		'POST' => [],
		'GET'  => []
	];

	public static function load( string $file ) {
		$router = new static;
		require $file;

		return $router;
	}

	public function define( $routes ) {
		$this->routes = $routes;
	}

	public function get( $uri, $controller ) {
		$this->routes['GET'][ $uri ] = $controller;
	}

	public function post( $uri, $controller ) {
		$this->routes['POST'][ $uri ] = $controller;
	}

	/**
	 * @param $uri
	 * @param $requestType
	 *
	 * @return mixed
	 * @throws Exception
	 */
	public function direct( $uri, $requestType ) {
		if ( array_key_exists( $uri, $this->routes[ $requestType ] ) ) {
			return $this->callAction( ...explode( '@', $this->routes[ $requestType ][ $uri ] ) );
		}
		throw new Exception( 'No route defined for this URI.' );
	}

	public function callAction( $controller, $action ) {
		if ( ! method_exists( $controller, $action ) ) {
			throw new Exception( "{$controller} does not respond to the {$action} action." );
		}

		$controller = new $controller;

		return $controller->$action();
	}
}
