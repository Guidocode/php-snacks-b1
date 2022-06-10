
<!-- 
  ## Snack 3
  Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
  DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
  Stampare ogni data con i relativi post.

-->


<?php
 
  $db = [
    '01-01-2007' => [
      [
        'title' => 'Titolo 1',
        'author' => 'Papagni',
        'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, delectus!'
      ]
    ],
    '02-02-2008' => [
      [
        'title' => 'Titolo 2',
        'author' => 'Pellegrini',
        'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, delectus!'
      ]
    ],
    '03-03-2009' => [
      [
        'title' => 'Titolo 3',
        'author' => 'Piero',
        'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, delectus!'
      ]
    ],
    '04-04-2010' => [
      [
        'title' => 'Titolo 4',
        'author' => 'Ugo',
        'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam, delectus!'
      ]
    ],
  ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Snack 3</title>
</head>
<body>

  <h1>Posts</h1>

  <ul>
    <?php foreach( $db as $date => $posts ) : ?>

      <li> <?php echo $date ?> </li>
      <ul class="mb-5">
        <?php foreach( $posts as $post ) : ?>
          <li> <?php echo $post['title'] ?> </li>
          <li> <?php echo $post['author'] ?> </li>
          <li> <?php echo $post['text'] ?> </li>
        <?php endforeach; ?>
      </ul>
        
    <?php endforeach; ?>
  </ul>

</body>
</html>