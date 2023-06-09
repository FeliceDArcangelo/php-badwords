<?php

    $paragrafo= $_GET["paragrafo"];
    $length= strlen($paragrafo);
    $word= $_GET["word"];
    $testocensura= str_replace($word, "***", $paragrafo);
    $length1= strlen($testocensura);
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
    <h1>Il tuo testo è lungo: <?php echo $length;?> </h1>
    <h1>Il tuo testo è:</h1>
    <p><?php echo $paragrafo;?></p>

    <h1>Il tuo testo censurato è lungo: <?php echo $lenght1;?> </h1>
    <h1>Il tuo testo è:</h1>
    <p><?php echo $testocensura;?></p>
</body>
</html>