<?php

class Connection {
	public static function make() {
		try {
			return new PDO( 'mysql:host=localhost;dbname=laracasts_eps14', 'root', '' );
		} catch ( Exception $e ) {
			die( $e->getMessage() );
		}
	}
}
