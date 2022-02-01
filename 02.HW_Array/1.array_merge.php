<?php
$str_fruits = "grapes, apples, bananas, lemon";
$str_vegetables = "cucumber, potato, broccoli, tomato";

$arr_fruits = explode(", ", $str_fruits);
$arr_vegetables = explode (", ", $str_vegetables);

$merged = array_merge($arr_fruits, $arr_vegetables);

foreach ($merged as $item)
    echo $item . "<br/>";