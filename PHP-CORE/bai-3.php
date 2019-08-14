<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
function createPhoneNumber($numbers)
{
    $str_num = "";
    $str_num = join($numbers);
  return '('.substr($str_num, 0, 3) .') '.substr($str_num, 3, 3).  '-'  .substr($str_num, 6);
}
echo createPhoneNumber($numbers);

