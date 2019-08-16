<?php
function vowelCount($str)
{
    $vowel = "oeoai";
    $arr = str_split($str);
    $vowel_array = str_split($vowel);
    $count = 0;
    foreach ($arr as $char)
    {
        if (in_array($char, $vowel_array))
        {
            $count++;
        }
    }
    return $count;
}
$test = "dfjhi";
echo vowelCount($test);