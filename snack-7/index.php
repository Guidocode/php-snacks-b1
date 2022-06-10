<!-- 
  ## Snack 7
  Creare un array contenente qualche alunno di un’ipotetica classe. 
  Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
  Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

  $alumns = [
    [
      'name' => 'Ugo',
      'lastname' => 'De Ughi',
      'grades' => [9, 6, 10, 7, 8, 5]
    ],
    [
      'name' => 'Mario',
      'lastname' => 'Rossi',
      'grades' => [9, 4, 8, 6, 8, 6]
    ],
    [
      'name' => 'Gianni',
      'lastname' => 'Neri',
      'grades' => [9, 3, 10, 7, 6, 4]
    ],
    [
      'name' => 'Giuseppe',
      'lastname' => 'Verdi',
      'grades' => [9, 6, 7, 7, 4, 3]
    ]
  ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>

  <h2>Classe 61 - Media voti</h2>

  <?php for ($i=0; $i < count($alumns); $i++): ?>
    
    <p> <?php echo $alumns[$i]["name"] . ' ' . '-' . ' '  . $alumns[$i]["lastname"] ?> </p>

    <span>Media voti: <?php echo $average = round( array_sum($alumns[$i]['grades']) / count($alumns[$i]['grades']), 1 ); ?> </span>

    <hr>

  <?php endfor ?>

  <ul>
    <?php foreach($alumns as $alumn): ?>

      <li>
        <?php echo $alumn["name"] ?>
        <?php echo $alumn["lastname"] ?>
        <br> Media voti: <?php echo $average = round( array_sum($alumn["grades"]) / count($alumn["grades"]), 1 ) ?>
        <hr>
      </li>

    <?php endforeach; ?>
  </ul>

</body>
</html>