<?php namespace Puckett;

class UnitConverter {

  function formatBytes($bytes, $precision = 2, $format = null) { 
      $base = log($bytes, 1024);
      $suffixes = array('B', 'kB', 'MB', 'GB', 'TB');
      return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
  }

}
