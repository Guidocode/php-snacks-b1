
<!-- 
  ## Snack 6
  Utilizzare questo array: https://pastebin.com/CkX3680A. 
  Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. 
-->


<?php
 
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];

  // var_dump($db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .box{
      width: 300px;
      height: 200px;
      border: 1px solid black;
      margin-bottom: 20px;
    }

    .teachers{
      background-color: lightgrey;
    }
    .pm{
      background-color: lightgreen;
    }
  </style>

  <title>Snack 6</title>
</head>
<body>

  <?php foreach( $db as $type => $people ): ?>
    <div class="box <?php echo $type ?> ">
      <ul>
        <?php foreach($people as $person) :?>
          <li> <?php echo 'Nome: ' . $person['name'] . '<br>' . 'Cognome: ' . $person['lastname']; ?> </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>

</body>
</html>