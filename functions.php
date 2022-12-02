<?php

function generateCharacters(){
  $symbols = ["!","?", "&","%","$","<",">","^","+","-","*","/","(",")","[","]","{","}","@","#","_","="];
  $arrayCharacters = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9), $symbols);
  return $arrayCharacters;
}

function generatePassword(int $nCharacters){
  $output="";
  $characters = generateCharacters();
  while(strlen($output) < $nCharacters){
    $output .= $characters[rand(0, count($characters)-1)];
  }
  return $output;
}