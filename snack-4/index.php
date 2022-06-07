<!-- 
  ## Snack 4
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

  // Funzione numeri random
  function getUniqueRandomNumbers($min, $max, $nItems){

    $newArray = [];

    // se max è minore di min inverto i valori usando una variabile temporanea
    if($max < $min){
      $tmp = $max;
      $max = $min;
      $min = $tmp;
    }

    // se il numero di valori estratti è maggiore di quelli possibili allora 
    //il numero di valori estratti diventa uguale a massimo dei valori possibili
    if($nItems > ($max - $min)){
      $nItems = $max - $min + 1;
    }

    
    while(count($newArray) < $nItems ){ 

      // genero numero random
      $number = rand($min, $max);

      // se non è presente nell'array lo pusho
      if(!in_array($number, $newArray)){
        
        $newArray[] = $number;
      }
    }

    return $newArray;
  }

  $numbers = getUniqueRandomNumbers(0,100,15);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>

  <h4> <?php var_dump($numbers) ?> </h4>
 
</body>
</html>