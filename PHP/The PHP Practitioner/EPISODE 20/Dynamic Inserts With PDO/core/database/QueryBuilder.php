<?php

class QueryBuilder {
	private $pdo;

	public function __construct( PDO $PDO ) {
		$this->setPdo( $PDO );
	}

	/**
	 * @return PDO
	 */
	public function getPdo() {
		return $this->pdo;
	}

	/**
	 * @param PDO $pdo
	 */
	public function setPdo( $pdo ) {
		$this->pdo = $pdo;
	}

	public function selectAll( $table ) {
		$statement = $this->getPdo()->prepare( 'select * from ' . $table );
		$statement->execute();

		return $statement->fetchAll( PDO::FETCH_CLASS );
	}

	public function insert( $table, $parameters ) {
		$sql = sprintf(
			'insert into %s (%s) values (%s)', $table, implode( ',', array_keys( $parameters ) ),
			':' . implode( ', :', array_keys( $parameters ) ) );
		try {
			$statement = $this->getPdo()->prepare( $sql );
			$statement->execute($parameters);
		} catch ( Exception $e ) {
			die("Whoops, something went wrong.");
		}
	}
}
