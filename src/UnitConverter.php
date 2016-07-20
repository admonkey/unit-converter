<?php namespace Puckett;

class UnitConverter {

  // static unit ratio map
  // http://stackoverflow.com/a/5501447/4233593
  private static $byte_binary_unit_map = [
    'YiB' => 1208925819614629174706176,
    'ZiB' => 1180591620717411303424,
    'EiB' => 1152921504606846976,
    'PiB' => 1125899906842624,
    'TiB' => 1099511627776,
    'GiB' => 1073741824,
    'MiB' => 1048576,
    'kiB' => 1024,
    'B'   => 1
  ];

  public static function formatBytes($bytes, $format = null) {

    // TODO: validate and trigger warning
    if(!isset($format['precision'])) $format['precision'] = 2;

    // use O(n) sorted iteration
    // http://stackoverflow.com/a/6147491/4233593
    foreach (self::$byte_binary_unit_map as $key => $val)
      if ($bytes >= $val)
        return number_format($bytes/$val,$format['precision'])." $key";

  }

}
