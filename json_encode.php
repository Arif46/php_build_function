<?php

//$data=array(1,2,3,4,5);
//
//var_dump($data);

$data=  file_get_contents("http://country.io/capital.json");
$capital= json_decode($data);
var_dump($capital);
