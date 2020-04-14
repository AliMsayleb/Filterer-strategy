<?php

include_once 'Filterer.php';

$filterer = new Filterer();
$data = [
    ['name' => 'Ali', 'age' => 12, 'weight' => 50],
    ['name' => 'Ali', 'age' => 18, 'weight' => 60],
    ['name' => 'Bariah', 'age' => 24, 'weight' => 40],
    ['name' => 'Ahmad', 'age' => 55, 'weight' => 99],
];

$result = $filterer->filter($data, 'name', '==', 'Ali');
var_dump($result);

$result = $filterer->filter($data, 'age', '<=', '18');
var_dump($result);

$result = $filterer->filter($data, 'weight', '>=', 99);
var_dump($result);
