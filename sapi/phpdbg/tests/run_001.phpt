--TEST--
Test argv passing
--INI--
register_argc_argv=On
--PHPDBG--
r
r 1 2 3
r
q
--EXPECTF--
[Successful compilation of %s]
prompt> int(5)
array(5) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(2) "--"
  [2]=>
  string(1) "1"
  [3]=>
  string(1) "2"
  [4]=>
  string(1) "3"
}
[Script ended normally]
prompt> int(5)
array(4) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(1) "1"
  [2]=>
  string(1) "2"
  [3]=>
  string(1) "3"
}
[Script ended normally]
prompt> int(5)
array(5) {
  [0]=>
  string(%d) "%s"
  [1]=>
  string(2) "--"
  [2]=>
  string(1) "1"
  [3]=>
  string(1) "2"
  [4]=>
  string(1) "3"
}
[Script ended normally]
prompt> 
--ARGS--
1 2 3
--FILE--
<?php
if is_null($argc) || is_null($argv) {
  die("Error. No parameters inserted!");
}
var_dump($argc, $argv);
