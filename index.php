<?php
    $testo = "Mr. Robot è una serie acclamata. Il pilot della prima stagione è stato accolto con entusiasmo da pubblico e critica per il suo essere così poco convenzionale. La storia prosegue seguendo una delle narrazioni più originali degli ultimi anni. Le vicende vengono raccontate seguendo il filo poco logico del protagonista Elliot, saltando quasi da un punto all’altro del suo universo tormentato e fuori controllo. Non esiste il rischio di annoiarsi, mai. Ad ogni angolo c’è una novità, che si insinua, quasi di soppiatto nella narrazione. Ogni colpo di scena, che in ogni altra produzione potrebbe sembrare ovvio e forzato, in Mr. Robot viene accompagnato e incastrato nel corso degli eventi. Lo spettatore è sorpreso, ma sa di doversi aspettare di tutto dalla realtà poco reale di Elliot.";

    $parola = $_GET["parola"];

    $testoFiltrato = str_replace($parola, "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/index.css">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h1>BadWords</h1>
        <p><?php echo $testoFiltrato?></p>
        <h3>Lunghezza testo: <?php echo strlen($testoFiltrato)?> caratteri</h3>
        <h4>La parola è <?php echo $parola?></h4>

    </body>
</html>