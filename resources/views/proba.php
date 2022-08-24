<?php
$a = [1,2,3,4,5];
$b = [1=>2];
foreach ($a as $element) {
    $c = array($element=>'x');
}
echo($c);