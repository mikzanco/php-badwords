<?php

$testo = $_POST['paragrafo'];
$censura = $_POST['censura'];

$testo2 = str_replace($censura, '***', $testo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina di atterraggio</title>
</head>
<body>
    <p> <?php echo $testo ?> </p>
    <p> La parola da censurare è "<strong><?php echo $censura ?></strong>" </p>
    <p> <?php echo $testo2 ?> </p>
    
</body>
</html>