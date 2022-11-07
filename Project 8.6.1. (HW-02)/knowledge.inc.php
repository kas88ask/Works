<?php
$a = 'Добро побеждает зло,';
$b = 100;
$c = '%';
?>

<?php
  $price = 65;

  if($price >= 15 && $price <= 76)
      $d = 'Это число находится между 15 и 76';
?>

<?php
$number = 5.5658;
?>

<?php
$x = 53;
$y = 42;
function addition() {
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
?>

<?php
$k = 21;
$l = &$k;
$l = 86;
?>
