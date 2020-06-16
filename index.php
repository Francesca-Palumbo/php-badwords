<?php
    $frase = "Si tratta di un legame tra una o più frasi $badword principali";

    $lunghezza =strlen($frase);

    $badword = $_GET['badword'];

    $numero_sostituzioni = 0;

    $frase_censurata = str_replace($badword, '***' , $frase, $numero_sostituzioni);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Badword</title>
    </head>
    <body>
        <p>
             <?php echo $frase; ?>
        </p>
        <p> Lunghezza paragrafo:
            <?php echo $lunghezza; ?> caratteri
        </p>
        <p> Parola che voglio censurare:
        </p>
        <p>
            <?php echo $frase_censurata ?>
        </p>
        <p> Numero sostituzioni
            <?php echo $numero_sostituzioni; ?>
        </p>
    </body>
</html>
