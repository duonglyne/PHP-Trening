<?php


function LongestWord($sen)
{
    $arr1 = str_split($sen);
    $arr2 = array();
    $arr3 = array();
    for ($i = 0; $i < sizeof($arr1); $i++)
    {
        $check = preg_match('/[a-zA-Z]/', $arr1[$i]);
        if ($check)
        {
            $arr2[] = $arr1[$i];
            if (!isset($arr1[$i+1]))
            {
                $arr3[] = implode($arr2);
                unset($arr2);
            }
        } else if (!empty($arr2))
        {
            $arr3[] = implode($arr2);
            unset($arr2);   
        }
    }
    // print_r($arr3); exit;

    $max = strlen($arr3[0]);
    $maxString = "";
    for ($j=1; $j < sizeof($arr3); $j++) 
    { 
        if (strlen($arr3[$j]) > $max)
        {
            $max = strlen($arr3[$j]);
            $maxString = $arr3[$j];
        }
    }

    return $maxString;
}
$test = "I love dogss";
echo LongestWord($test);
