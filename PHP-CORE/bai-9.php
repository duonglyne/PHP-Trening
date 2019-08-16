<?php
function exchangeArray(&$my_array, &$other_array)
{
    $new_my_array = array();
    $new_other_array = array();
    while (!empty($my_array))
    {
        array_push($new_other_array, array_pop($my_array));
    }
    while (!empty($other_array))
    {
        array_push($new_my_array, array_pop($other_array));
    }
    $my_array = $new_my_array;
    $other_array = $new_other_array;
}
$myarr = array("Volvo", "BMW", "Toyota");
$otherarr = array("35", "37", "43");
exchangeArray($myarr, $otherarr);
print_r($myarr);
echo "<br>";
print_r($otherarr);

