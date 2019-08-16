<?php
function commas($number)
{
    $str = strstr((string)$number, '.');
    return  number_format($number,strlen($str) - 1 , '.', ',');
}
echo commas(-1000000.123);
