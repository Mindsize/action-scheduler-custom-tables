<?php


namespace Action_Scheduler\Custom_Tables\Migration;

use ActionScheduler_Logger as Logger;
use ActionScheduler_Store as Store;

/**
 * Class Migration_Config
 *
 * A config builder for the Migration_Runner class
 */
class Migration_Config {
	/** @var Store */
	private $source_store;

	/** @var Logger */
	private $source_logger;

	/** @var Store */
	private $destination_store;

	/** @var Logger */
	private $destination_logger;

	/** @var bool */
	private $dry_run = false;

	public function __construct() {

	}

	public function get_source_store() {
		if ( empty( $this->source_store ) ) {
			throw new \RuntimeException( __( 'Source store must be configured before running a migration', 'action-scheduler' ) );
		}

		return $this->source_store;
	}

	/**
	 * @param Store $store
	 */
	public function set_source_store( Store $store ) {
		$this->source_store = $store;
	}

	/**
	 * @return Logger
	 */
	public function get_source_logger() {
		if ( empty( $this->source_logger ) ) {
			throw new \RuntimeException( __( 'Source logger must be configured before running a migration', 'action-scheduler' ) );
		}

		return $this->source_logger;
	}

	/**
	 * @param Logger $logger
	 */
	public function set_source_logger( Logger $logger ) {
		$this->source_logger = $logger;
	}

	/**
	 * @return Store
	 */
	public function get_destination_store() {
		if ( empty( $this->destination_store ) ) {
			throw new \RuntimeException( __( 'Destination store must be configured before running a migration', 'action-scheduler' ) );
		}

		return $this->destination_store;
	}

	/**
	 * @param Store $store
	 */
	public function set_destination_store( Store $store ) {
		$this->destination_store = $store;
	}

	/**
	 * @return Logger
	 */
	public function get_destination_logger() {
		if ( empty( $this->destination_logger ) ) {
			throw new \RuntimeException( __( 'Destination logger must be configured before running a migration', 'action-scheduler' ) );
		}

		return $this->destination_logger;
	}

	/**
	 * @param Logger $logger
	 */
	public function set_destination_logger( Logger $logger ) {
		$this->destination_logger = $logger;
	}

	/**
	 * @return bool
	 */
	public function get_dry_run() {
		return $this->dry_run;
	}

	/**
	 * @param bool $dry_run
	 */
	public function set_dry_run( $dry_run ) {
		$this->dry_run = (bool) $dry_run;
	}

}