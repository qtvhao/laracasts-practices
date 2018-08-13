<?php

class Task {
	/**
	 * @var string
	 */
	private $description;
	/**
	 * @var boolean
	 */
	private $completed;

	/**
	 * Task constructor.
	 *
	 * @param string $description
	 */
	public function __construct( $description ) {
		$this->setDescription( $description );
		$this->setCompleted( false );
	}

	public function complete() {
		$this->setCompleted( true );
	}

	/**
	 * @return bool
	 */
	public function isCompleted() {
		return $this->getCompleted();
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * @return boolean
	 */
	public function getCompleted() {
		return $this->completed;
	}

	/**
	 * @param boolean $completed
	 */
	public function setCompleted( $completed ) {
		$this->completed = $completed;
	}

}
