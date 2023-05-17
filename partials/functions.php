<?php

// funzione che controlla se nell'indirizzo email è presenta la chiocciola e il punto

function checkEmail($email){
  $result = false;

  if(str_contains($email, '@') && str_contains($email, '.') ){
    $result = true;
  }


  return $result;
}