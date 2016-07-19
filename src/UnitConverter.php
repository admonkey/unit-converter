<?php namespace Puckett;

class UnitConverter {

  function formatBytes($bytes, $format = null) { 

      // TODO: validate and trigger warning
      if(!isset($format['precision'])) $format['precision'] = 2;

      $base = log($bytes, 1048576);
      $suffixes = array('kiB', 'MiB', 'GiB', 'TiB');
      return round(pow(1048576, $base - floor($base)), $format['precision']) .' '. $suffixes[floor($base)];

  }

}
