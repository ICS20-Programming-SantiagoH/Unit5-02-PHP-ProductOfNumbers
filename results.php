<?php

//message for the user
  $message = "";
  // Use first and second number user has entered for results
    
  $firstNumber = $_POST['firstNumber'];

  $secondNumber = $_POST['secondNumber'];

  //initialize sum

  $product = 0;

  //loop for when second number is positive
  for ($counter = 0; $counter < $secondNumber; $counter++){
    $product = $product + $firstNumber;
  }

  //loop for when second number is negetive
  for ($counter = 0; $counter > $secondNumber; $counter--){
    $product = $product - $firstNumber;
  }

  //loop for when second number is 0
  for ($counter = 0; $counter == $secondNumber; $counter++){
    $product = $product;
  }
  $message = $message . $firstNumber . "  x " . $secondNumber . " = " . $product;
  // Display Results back to User
  echo $message
?>