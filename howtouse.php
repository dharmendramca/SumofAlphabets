<?php
require_once("SumofAlphabets.php");

$obj=new SumofAlphabets();

$str='Hello World';
$sum = $obj->do($str); 
echo $sum;
