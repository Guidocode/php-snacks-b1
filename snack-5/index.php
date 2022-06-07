<!-- 
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e 
suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php

  $paragrafo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et consequuntur obcaecati quasi porro nesciunt temporibus fugiat rerum corrupti vitae magnam soluta hic unde aliquam, laboriosam ut nihil facere dolorem odio. Asperiores distinctio fugit optio earum. Velit impedit possimus reiciendis omnis dolorem maiores eius a unde, assumenda saepe quo vitae mollitia voluptates, provident dicta ducimus, in deleniti? Repudiandae delectus sunt asperiores doloribus, nulla laudantium fugit obcaecati possimus. Commodi provident minima vel eligendi facere, autem aliquam quibusdam officia incidunt possimus debitis repudiandae, soluta similique eum, quam harum culpa officiis fuga quas deleniti pariatur dolores ad. Neque reiciendis inventore, non cumque quis, ullam eum harum iusto quod eius dolore porro labore id exercitationem veniam delectus. Repudiandae tenetur laudantium id nisi cum minima odio dignissimos officiis. Eius ipsum voluptatum deleniti minus ullam magnam rerum adipisci. Dolor sapiente repellat maxime quaerat ipsum quibusdam dolorem officiis labore sunt culpa repellendus non perferendis, enim modi fugiat quod ex odio ad iusto autem, libero architecto facilis. Labore alias obcaecati in ab eaque eum tenetur atque! Aut provident quas aspernatur sit, quo quod! Omnis quae saepe eum modi? Cum similique dicta quaerat eveniet aliquid tempora tenetur aut nemo veniam odit cumque quas, mollitia facilis ipsum minus velit modi totam? Ipsa totam aspernatur similique voluptatum ipsum omnis pariatur harum sapiente dignissimos quas nobis iure, ipsam perferendis. Labore reiciendis quod ipsa error ipsum dolore maiores sequi facilis delectus! Incidunt accusamus libero nesciunt iure, ex ullam tempore odit. Beatae doloremque maiores laboriosam corporis voluptatibus. Praesentium delectus, fugit ipsa nihil eaque quam consequatur quos sapiente tempora nisi in doloribus doloremque. Optio earum consectetur deleniti eaque non adipisci unde ratione, odio labore id autem soluta vero facilis, officia excepturi iusto officiis blanditiis perspiciatis. Iure eaque fuga eum non. Laborum amet, expedita dicta laudantium provident atque laboriosam aspernatur odio ipsa et at vero vel cum!';

  $split_para = explode('.', $paragrafo);

  // var_dump($split_para);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>

  <h1>Divido, dopo ogni punto, il paragrafo grande in tanti paragrafi piccoli</h1>
  
  <h3>Paragrafo grande:</h3>
  <p> <?php echo $paragrafo ?> </p>

  <hr>

  <h3>Paragrafi suddivisi:</h3>
  <ul>
    <?php for ($i=0; $i < count($split_para); $i++):
      
      if(!empty($split_para[$i])): ?>
        <li> <?php echo $split_para[$i] ?> </li>
      <?php endif ?>

    <?php endfor ?>
  </ul>

</body>
</html>