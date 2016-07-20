<?php

class UnitConverterTest extends PHPUnit_Framework_TestCase {

  /**
    * @dataProvider getBinaryByteFormats
    */
  public function testCanFormatBinaryBytes($expected, $bytes, $format = null){

    $this->assertSame(
      $expected,
      Puckett\UnitConverter::formatBytes($bytes, $format)
    );

  }

  public function getBinaryByteFormats(){

    return [
      ['1.00 B',     1],
      ['1,000.00 B', 1000],
      ['1.00 kiB',   1024],
      ['1.00 MiB',   1048576],
      ['2.00 MiB',   2097152],
      ['1.00 GiB',   1073741824],
      ['1 GiB',      1073741824, ['precision'=>0]],
      ['1.000 GiB',  1073741824, ['precision'=>3]],
      ['2.00 GiB',   2147483648],
      ['1.00 TiB',   1099511627776],
      ['1.00 PiB',   1125899906842624],
      ['1.00 EiB',   1152921504606846976],
      ['1.00 ZiB',   1180591620717411303424],
      ['1.00 YiB',   1208925819614629174706176]
    ];

  }

}
