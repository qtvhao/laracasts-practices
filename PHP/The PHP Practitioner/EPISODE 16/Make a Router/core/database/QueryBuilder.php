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
}
