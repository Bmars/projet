<?php

function calculerPrixTTC ($prixHT, $tva)
{
    $prixTTC = $prixHT * 1 + $prixHT * ( $tva / 100 );


    return $prixTTC;
}
    $prixTTC = calculerPrixTTC(100,20);
    echo $prixTTC;
