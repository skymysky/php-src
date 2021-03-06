--TEST--
mb_ereg() returning matches
--SKIPIF--
<?php
if (!extension_loaded('mbstring')) die('skip mbstring not enabled');
if (!function_exists("mb_ereg")) print "skip mb_ereg() not available";
?>
--FILE--
<?php

$a = -1; $b = -1; $c = -1;
mb_ereg($a, $b, $c);
var_dump($a, $b, $c);

mb_eregi($a, $b, $c);
var_dump($a, $b, $c);

mb_ereg_search_init($a, $b, $c);
var_dump($a, $b, $c);

echo "Done\n";
?>
--EXPECTF--
int(-1)
int(-1)
array(1) {
  [0]=>
  string(2) "-1"
}
int(-1)
int(-1)
array(1) {
  [0]=>
  string(2) "-1"
}

Warning: mb_ereg_search_init() expects parameter 3 to be string, array given in %s on line %d
int(-1)
int(-1)
array(1) {
  [0]=>
  string(2) "-1"
}
Done
