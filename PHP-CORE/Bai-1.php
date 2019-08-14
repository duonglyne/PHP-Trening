<?php


function LongestWord($sen)
{
    $arr1 = array();
    $arr2 = array();
    for ($i = 0; $i < strlen($sen); $i++)
    {
        $check = preg_match('/[a-zA-Z]/', substr($sen, $i, 1));
        if ($check)
        {
            $arr1[] = substr($sen, $i, 1);
        } else if (!empty($arr1))
        {
            $arr2[] = implode($arr1);
            unset($arr1);   
        }
    }

    $max = strlen($arr2[0]);
    $maxString = "";
    for ($j=1; $j < sizeof($arr2); $j++) 
    { 
        if (strlen($arr2[$j]) > $max)
        {
            $max = strlen($arr2[$j]);
            $maxString = $arr2[$j];
        }
    }

    return $maxString;
}
$test = "I love dogs";
echo LongestWord($test);
