<?php

require ('vendor/autoload.php');

$sql = 'insert into ad(name) values ';
$arr = [
        'World!'
    ,   'qweqwe!'
];

$addParen = function($val) {
    return '(\'' . $val . '\')';
};
    
$parensAdded = array_map($addParen, $arr);
$sql .= implode(',', $parensAdded);

echo $sql;