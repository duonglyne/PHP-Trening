<?php
function solve($str)
{
    $arr = str_split($str);
    $arr_out = array();
    $num = "";
    for ($i=0; $i < sizeof($arr) ; $i++)
    {
        if ((is_numeric($arr[$i])) && (isset($arr[$i+1])) &&(!is_numeric($arr[$i+1])))
        {
            
            $num .= $arr[$i];
            array_push($arr_out, (int)$num);
            $num = "";
        } elseif (is_numeric($arr[$i]))
        {
            $num .= $arr[$i];
        }
    }
    rsort($arr_out);
    return $arr_out[0];
}

$test = "gh12cdy695m1";
echo "Largest number in string is: ".solve($test);