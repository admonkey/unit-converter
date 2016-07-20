<?php

function getnum($num){
  return $num;
}

$arr = [
  1,                         // B
  1024,                      // KiB
  1048576,                   // MiB
  1073741824,                // GiB
  1099511627776,             // TiB
  1125899906842624,          // PiB
  1152921504606846976,       // EiB
  9223372036854775807,       // PHP_INT_MAX
  1180591620717411303424,    // ZiB
  1208925819614629174706176, // YiB
];

foreach ($arr as $num)
  echo getnum($num).'<br>';
