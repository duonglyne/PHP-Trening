<?php

function backspaceInString($str)
{
    $arr = str_split($str);
    $arr_out = array();
    if (empty($arr))
    {
        return "";
    } else if (!in_array("#", $arr))
    {
        return join("", $arr);
    } else if ($arr[0] == "#")
    {
        unset($arr[0]);
        backspaceInString(join("", $arr));
    } else 
    {
        for ($i=0; $i < sizeof($arr) ; $i++) 
        { 
            $arr_out[] = $arr[$i]
            if ($arr[$i] == "#")
            {
                
            }
        }
    }
}