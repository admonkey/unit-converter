<?php

class UnitConverterTest extends PHPUnit_Framework_TestCase {

  /**
    * @dataProvider getBinaryByteFormats
    */
  public function testCanFormatBinaryBytes($expected, $bytes){

    $this->assertSame(
      $expected,
      Puckett\UnitConverter::formatBytes($bytes)
    );

  }

  public function getBinaryByteFormats(){

    return [
      ['1 B',     1],
      ['1,000 B', 1000],
      ['1 kiB',   1024],
      ['1 MiB',   1048576],
      ['2 MiB',   2097152],
      ['1 GiB',   1073741824],
      ['2 GiB',   2147483648],
      ['1 TiB',   1099511627776],
      ['1 PiB',   1125899906842624],
      ['1 EiB',   1152921504606846976],
      ['1 ZiB',   1180591620717411303424],
      ['1 YiB',   1208925819614629174706176]
    ];

  }

}
