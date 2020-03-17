<?php

function calculerSurface ($longueur, $largeur, $hauteur)
{
    //$surfaceMurs = $longueur * $hauteur * 2 + $largeur * hauteur * 2;
    
    $surfaceMurs = 2 * $hauteur * ($longueur + $largeur);

    return $surfaceMurs;
}
 $surfaceMurs= calculerSurface(5,7,4);
 echo $surfaceMurs;