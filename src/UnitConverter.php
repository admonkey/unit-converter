<?php namespace Puckett;

class UnitConverter {

  public static function formatBytes($bytes, $format = null) {

      // TODO: validate and trigger warning
      if(!isset($format['precision'])) $format['precision'] = 2;

      $base = log($bytes, 1048576);
      $suffixes = array('B', 'kiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');
      return round(pow(1048576, $base - floor($base)), $format['precision']) .' '. $suffixes[floor($base)];

  }

}
