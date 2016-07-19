<?php

class UnitConverterTest extends PHPUnit_Framework_TestCase {

  /**
    * @dataProvider getByteFormats
    */
  public function testCanFormatBytes($bytes, $format, $expected){

    $this->assertSame( $expected, Puckett\UnitConverter::formatBytes($bytes, $format) );

  }

  public function getByteFormats(){

    return [
      [1048576, null, '1 MiB'],
      [2097152, null, '2 MiB']
    ];

  }

}
