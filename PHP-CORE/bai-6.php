<?php
function mostPopularChar($str)
{
    $arr = str_split($str);
    $arr_out = array();
    for ($i=0; $i < sizeof($arr) ; $i++)
    {
        (isset($arr_out[$arr[$i]]))? $arr_out[$arr[$i]]++ : $arr_out[$arr[$i]] = 1;
    }
    
    // print_r($arr_out);
    $max_value = 0;
    $max_key = "";
    foreach ($arr_out as $key => $value)
    {
        if ($value > $max_value)
        {
            $max_value = $value;
            $max_key = $key;
        }
    }
    $check = 0;
    foreach ($arr_out as $key => $value)
    {
        if ($max_value == $value)
        {
            $check++;
        }
    }
    if ($check == 1)
    {
        return "the most frequent character is: ".$max_key;
    } else
    {
        return "No most popular char";
    }
}
$test = "ababbab";
echo mostPopularChar($test);