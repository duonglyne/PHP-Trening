<?php
function commas($number)
{
    return number_format($number, 2, '.', ',');
}
echo commas(100000.23);
