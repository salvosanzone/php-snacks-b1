<?php
/* Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. */

//creo l'array
$movies = [
  "14/09/1963" => [
    [
      "title" => "eight and half",
      "author" => "federico fellini",
      "text" => "text post 1"
    ],
    [
      "title" => "i vitelloni",
      "author" => "federico fellini",
      "text" => "text post 2"
    ]
  ],
  "14/09/1931" => [
    [
      "title" => "il mostro di dusseldorf",
      "author" => "fritz lang",
      "text" => "text post 3"
    ]
  ]
];

var_dump($movies);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    /*for($i = 0; $i < count($movies); $i++){
        echo $movies["14/09/1963"];
        
        print_r($movies);
    };*/

    /* echo '<pre>'; print_r($movies["14/09/1963"]); echo '</pre>';
    echo '<pre>'; print_r($movies["14/09/1931"]); echo '</pre>'; */
   
    foreach ($movies["14/09/1963"] as $result) {
      echo $result['title'], '<br>';
      echo $result['author'], '<br>';
      echo $result['text'], '<br>';
    }

    echo '<hr>';
    
    foreach ($movies as $key => $value) {
      echo "$key => $value" . '<br>';
    }
    /*
    foreach ($movies["14/09/1931"] as $result) {
      echo $result['title'], '<br>';
      echo $result['author'], '<br>';
      echo $result['text'], '<br>';
    }*/

    


    

  
  ?>
</body>
</html>