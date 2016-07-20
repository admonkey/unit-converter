<?php

class UnitConverterTest extends PHPUnit_Framework_TestCase {

  /**
    * @dataProvider getByteFormats
    */
  public function testCanFormatBytes($bytes, $format, $expected){

    $this->assertSame(
      $expected,
      Puckett\UnitConverter::formatBytes($bytes, $format)
    );

  }

  public function getByteFormats(){

    return [
      [1, null, '1 B'],
      [1000, null, '1000 B'],
      [1000, ['unit' => 'KB'], '1 KB'],
      [1024, null, '1 KiB'],
      [1048576, null, '1 MiB'],
      [2097152, null, '2 MiB'],
      [1073741824, null, '1 GiB'],
      [2147483648, null, '2 GiB'],
      [1099511627776, null, '1 TiB'],
      [1125899906842624, null, '1 PiB'],
      [1152921504606846976, null, '1 EiB'],
      [1180591620717411303424, null, '1 ZiB'],
      [1208925819614629174706176, null, '1 YiB'],
    ];

  }

}
