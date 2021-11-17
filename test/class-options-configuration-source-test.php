<?php

namespace Moonwalking_Bits\Configuration\Configuration_Source;

use PHPUnit\Framework\TestCase;
use phpmock\phpunit\PHPMock;

/**
 * @coversDefaultClass \Moonwalking_Bits\Configuration\Options_Configuration_Source
 */
class Options_Configuration_Source_Test extends TestCase {

	use PHPMock;

	/**
	 * @test
	 */
	public function should_return_values(): void {
		$option = 'test';
		$value = array( 'key' => 'value' );
		$configuration_source = new Options_Configuration_Source( $option );
		$get_option = $this->getFunctionMock( __NAMESPACE__, 'get_option' );

		$get_option->expects( $this->once() )
			->with( $option, array() )
			->willReturn( $value );

		$this->assertEquals( $value, $configuration_source->fetch() );
	}
}
