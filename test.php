<?php

require './ProtoType.php';

$animal = new ProtoType();
$animal->says = function () {
    return "My name is {$this->name}.";
};

$cat = new ProtoType($animal);
$cat->name = 'The Cat';

var_dump($cat->says());

