<?php
/**
 * Configuration: WordPress options configuration source
 *
 * @package Moonwalking_Bits\Configuration\Configuration_Source
 * @author Martin Pettersson
 * @license GPL-2.0
 * @since 0.1.0
 */

namespace Moonwalking_Bits\Configuration\Configuration_Source;

/**
 * WordPress options configuration source implementation.
 *
 * @since 0.1.0
 */
class Options_Configuration_Source implements Configuration_Source_Interface {

	/**
	 * The option identifier.
	 *
	 * @var string
	 */
	private string $option;

	/**
	 * Creates a new configuration source instance.
	 *
	 * @param string $option The option identifier.
	 */
	public function __construct( string $option ) {
		$this->option = $option;
	}

	/**
	 * Fetches the configuration source content.
	 *
	 * @since 0.1.0
	 * @return array The configuration source content.
	 */
	public function fetch(): array {
		return (array) get_option( $this->option, array() );
	}
}
