<?php
function LetterChanges($str) {  
  $arr = str_split($str);
  $arr_word = range("a","z");
  $vow = array('a', 'e', 'i', 'o', 'u');
  foreach($arr as $key => $value){
    if(in_array($value,$arr_word)){
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

$test = "duonglyvan";
echo LetterChanges($test);