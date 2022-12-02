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

function generatePassword(int $nCharacters, array $checkbox, $noRepetitions){
  $output="";
  $characters = generateCharacters($checkbox);
  $stop = false;
  while(strlen($output) < $nCharacters && $stop == false){
    $newCharacter = $characters[rand(0, count($characters)-1)];
    if($noRepetitions){
      if(strlen($output) == count($characters)){
        $stop = true;
      }
      if(!str_contains($output, $newCharacter)){
        $output .= $newCharacter;
      }
    } else {
      $output .= $newCharacter;
    }
  }
  return $output;
}