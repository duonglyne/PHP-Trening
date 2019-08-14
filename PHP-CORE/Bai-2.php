<?php
function LetterChanges($str) {  
  $arr = str_split($str);
  $let = range("a","z");
  $vow = array('a', 'e', 'i', 'o', 'u');
  foreach($arr as $key => $value){
    if(in_array($value,$let)){
      $arr[$key] = $value=='z' ? 'a' : ++$value; 
      if(in_array($arr[$key],$vow)){
         $arr[$key] = strtoupper($arr[$key]); 
      }
    } else {
      $arr[$key] = $value; 
    }
  }
  // code goes here
  return join("",$arr); 
         
}

$test = "hello*3";
echo LetterChanges($test);