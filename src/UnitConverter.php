<?php namespace Puckett;

class UnitConverter {

  public static function formatBytes($bytes, $format = null) {

      // TODO: validate and trigger warning
      // if(!isset($format['precision'])) $format['precision'] = 2;

      // static unit ratio map http://stackoverflow.com/a/5501447/4233593
      if ($bytes >= 1208925819614629174706176)
      {
          $bytes = number_format($bytes / 1208925819614629174706176) . ' YiB';
      }
      elseif ($bytes >= 1180591620717411303424)
      {
          $bytes = number_format($bytes / 1180591620717411303424) . ' ZiB';
      }
      elseif ($bytes >= 1152921504606846976)
      {
          $bytes = number_format($bytes / 1152921504606846976) . ' EiB';
      }
      elseif ($bytes >= 1125899906842624)
      {
          $bytes = number_format($bytes / 1125899906842624) . ' PiB';
      }
      elseif ($bytes >= 1099511627776)
      {
          $bytes = number_format($bytes / 1099511627776) . ' TiB';
      }
      elseif ($bytes >= 1073741824)
      {
          $bytes = number_format($bytes / 1073741824) . ' GiB';
      }
      elseif ($bytes >= 1048576)
      {
          $bytes = number_format($bytes / 1048576) . ' MiB';
      }
      elseif ($bytes >= 1024)
      {
          $bytes = number_format($bytes / 1024) . ' kiB';
      }
      else
      {
          $bytes = $bytes . ' B';
      }

      return $bytes;

  }

}
