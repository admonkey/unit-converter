<?php

class UnitConverterTest extends PHPUnit_Framework_TestCase {

  public function testCanFormatBytes(){

    $this->assertTrue( Puckett\UnitConverter::formatBytes(123456) );

  }

}
