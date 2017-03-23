<? php

/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$x = 5; // global scope
function something() {
  $y = 10; //local scope
  echo $GLOBALS['x'];
}

something();

?>
