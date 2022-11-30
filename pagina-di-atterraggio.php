<?php

// con post riprendo il form in cui ho inseiro il testo da scrivere e la prola scelta da censurare.

$testo = $_POST['paragrafo'];
$censura = $_POST['censura'];

// Qui creo un testo secondario dove vado a sostituire la parola scelta da censurare con tre asterischi: ***.
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
    <!-- semplice h1 per spiegare la situazion -->
    <h1>In questa pagina puoi rivedere il testo scritto nel form, la parola che volevi censurare e il testo con le modifiche di censura avvenute.</h1>
    
    <!-- attraverso echo e la variabile vado a trascrivere in pagina quello che ho riportato nella variabile e quindi l'input dato -->
    <p> <?php echo $testo ?> </p>
    
    <!-- questa è la parola da censurare che la vado a mostrare come ho fatto sopra con tutto il testo quindi mettendo echo $variabile in mezzo a <?php ?> -->
    <p> La parola da censurare è "<strong><?php echo $censura ?></strong>" </p>
    <!-- trascrivo la varibile $testo2 che riporta la censura avvenuta -->
    <p> <?php echo $testo2 ?> </p>
    
</body>
</html>