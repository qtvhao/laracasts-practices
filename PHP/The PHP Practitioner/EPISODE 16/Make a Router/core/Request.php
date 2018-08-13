<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/13/2018
 * Time: 4:46 PM
 */

class Request {

	public static function uri() {
		return trim( $_GET['path'], '/' );
	}
}
