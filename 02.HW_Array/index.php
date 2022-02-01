<?php
//First task
$str_fruits = "grapes, apples, bananas, lemon";
$str_vegetables = "cucumber, potato, broccoli, tomato";

$arr_fruits = explode(", ", $str_fruits);
$arr_vegetables = explode (", ", $str_vegetables);

$merged = array_merge($arr_fruits, $arr_vegetables);

foreach ($merged as $item)
    echo $item . "<br/>";

//Second task
echo "<hr><h3>Fruits</h3>";
$arr_fruits = [
    [
        'name' => 'grapes',
        'height' => '2'
    ],
    [
        'name' => 'apples',
        'height' => '4'
    ],
    [
        'name' => 'bananas',
        'height' => '6'
    ],
    [
        'name' => 'lemon',
        'height' => '1'
    ]
];
foreach ($arr_fruits as $fruit){
    echo $fruit['name'] . " - " . $fruit['height'] . " кг<br/>";
}
echo "<h3>Vegetables</h3>";
$arr_vegetables = [
    [
        'name' => 'cucumber',
        'height' => 13
    ],
    [
        'name' => 'potato',
        'height' => 12
    ],
    [
        'name' => 'broccoli',
        'height' => 10
    ],
    [
        'name' => 'tomato',
        'height' => 14
    ]
];
foreach ($arr_vegetables as $vegetable){
    echo $vegetable['name'] . " - " . $vegetable['height'] . " кг<br/>";
}



