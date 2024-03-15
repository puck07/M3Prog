<?php
$afstand = 1081;
$litereuro = 1.89;
$prijsreis = 60;
$tankinhoud = 50;

$litergebruiken = 72;
$tanken = 2;
$kostenauto = 136;

if($kostenauto > $prijsreis) {
    echo "Ik ga met de trein";
}else{
    echo "Ik ga met de auto";
};

echo "De totale afstand, 1081";
echo "totale prijs,136";
echo "het aantal liter bezine dat je verbuikt: 72";
echo "het aantal keren dat je moet tanken: 2 keer";