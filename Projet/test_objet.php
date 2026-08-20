<?php

include "./Vehicule.php";

$voiture = new Vehicule("Mercedes CLK", 4, 250);
$moto = new Vehicule("Honda CBR", 2, 280);
$voiture->boost();
$moto->boost();
$plusRapide = $voiture->plusRapide($moto);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $voiture->detect();
        echo $moto->detect();    
        echo $voiture->getVitesse();
        echo $moto->getVitesse();
        echo $plusRapide->getNomVehicule();
    ?>
</body>
</html>
