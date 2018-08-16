<?php
function view( $name, $data = [] ) {
	extract( $data );

	return require ABSPATH . DS . 'views' . DS . "{$name}.view.php";
}
