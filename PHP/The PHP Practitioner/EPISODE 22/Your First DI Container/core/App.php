<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/16/2018
 * Time: 10:34 AM
 */

class App {
	protected static $registry = [];

	public static function bind( string $key, $value ) {
		static::$registry[ $key ] = $value;
	}

	public static function get( string $key ) {
		if ( ! array_key_exists( $key, static::$registry ) ) {
			throw new Exception( "No {$key} is bound in the container." );
		}

		return static::$registry[ $key ];
	}
}
