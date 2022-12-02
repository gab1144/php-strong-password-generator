<?php

function generateCharacters(array $characters){
  $symbols = ["!","?", "&","%","$","<",">","^","+","-","*","/","(",")","[","]","{","}","@","#","_","="];
  $arrayCharacters = [];
  if(in_array("letters", $characters)){
    $arrayCharacters = array_merge($arrayCharacters, range('A', 'Z'), range('a', 'z'));
  }
  if(in_array("numbers", $characters)){
    $arrayCharacters = array_merge($arrayCharacters, range(0, 9));
  }
  if(in_array("symbols", $characters)){
    $arrayCharacters = array_merge($arrayCharacters, $symbols);
  }
  return $arrayCharacters;
}

function generatePassword(int $nCharacters, array $checkbox){
  $output="";
  $characters = generateCharacters($checkbox);
  while(strlen($output) < $nCharacters){
    $output .= $characters[rand(0, count($characters)-1)];
  }
  return $output;
}