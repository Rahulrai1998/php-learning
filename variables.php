<?php

#variables
$name = "rahul";
$age = 28;
echo $age . ' ' . $name;
echo gettype($name);

var_dump($name, $age);
$name = true;
echo $name;
is_string($name);

isset($age);


define('PI', 3.14);
echo '<br>' . PI . '<br>';

#BUILT-IN CONSTANTS
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
