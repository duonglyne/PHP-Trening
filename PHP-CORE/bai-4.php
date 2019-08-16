<?php

function backspaceInString($str)
{
    $arr = str_split($str);
    $arr_out = array();
    if (empty($arr))
    {
        return "";
    } elseif (!in_array("#", $arr))
    {
        return join("", $arr);
    }  else
    {
        for ($i=0; $i < sizeof($arr) ; $i++) 
        { 
            if ($arr[$i] != "#")
            {
                array_push($arr_out, $arr[$i]);
            } else
            {
                if (!empty($arr_out))
                {
                    array_pop($arr_out);
                }
            }
        }
        return join("", $arr_out);;
    }
}
$input = "abc#d##c";
echo backspaceInString($input);