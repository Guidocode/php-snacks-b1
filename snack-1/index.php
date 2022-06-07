<!-- 
  ## Snack 1
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
  Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
  casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
-->

<?php

  $games = [
    [
      'home_team' => 'Virtus Segafredo Bologna',
      'guest_team' => 'A|X Armani Exchange Milano',
      'home_points' => 52,
      'guest_points' => 48,
    ],
    [
      'home_team' => 'Germani Brescia',
      'guest_team' => 'Bertram Derthona Basket Tortona',
      'home_points' => 42,
      'guest_points' => 34,
    ],
    [
      'home_team' => 'Umana Reyer Venezia',
      'guest_team' => 'Banco di Sardegna Sassari',
      'home_points' => 34,
      'guest_points' => 34,
    ],
    [
      'home_team' => 'Unahotels Reggio Emilia',
      'guest_team' => 'Carpegna Prosciutto Pesaro',
      'home_points' => 30,
      'guest_points' => 28,
    ]
  ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

      <h2>Lega Basket Serie A - Calendario</h2>

  <?php for ($i=0; $i < count($games); $i++): ?>
    
    <p> <?php echo $games[$i]["home_team"] . ' ' . '-' . ' '  . $games[$i]["guest_team"] . ' '  . '|' . ' '  . $games[$i]["home_points"] . ' '  . '-' . ' '  . $games[$i]["guest_points"] ?> </p>

  <?php endfor ?>
 
</body>
</html>